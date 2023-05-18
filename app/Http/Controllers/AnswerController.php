<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\Problem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class AnswerController extends Controller
{
    public function store($Cslug, $Pslug, Request $request)
    {

        $contest = Contest::where('slug', $Cslug)->firstOrFail();
        $problem = Problem::where('slug', $Pslug)->firstOrFail();

        $file = file_get_contents($request->file('sourceCode'));

        $tmpFilePath = storage_path('app/source/program.cpp');
        file_put_contents($tmpFilePath, $file);

        $compiledFilePath = storage_path('app/source/program'); // Lokasi file hasil kompilasi
        $input = $problem['contoh_input'];
        try {
            // Kompilasi program C++ atau C
            $compileCommand = "g++ -o {$compiledFilePath} {$tmpFilePath}";
            $process = Process::fromShellCommandline($compileCommand)->setTimeout(60)->mustRun();

            // Jalankan program yang telah dikompilasi
            $runCommand = $compiledFilePath;
            $process = new Process([$runCommand]);
            $process->setInput($input);
            $process->setTimeout(10);
            $process->run();

            $output = $process->getOutput();
            // Bandingkan output dengan jawaban yang diharapkan
            $expectedAnswer = $problem["contoh_output"];
            $expectedAnswer = str_replace('<br>', PHP_EOL, $expectedAnswer);
            // dd(trim($expectedAnswer));

            $result = "";
            if (strcmp(trim($output), trim($expectedAnswer)) === 0) {
                $result = "benar";
            } else {
                $result = "salah";
            }
        } catch (ProcessFailedException $exception) {
            // Tangkap pengecualian saat kompilasi gagal
            $result = "error";
        }
        $resultInt = ($result == "benar") ? 100 : (($result == "salah") ? 0 : -100);

        

        $data = [
            'contest_id' => $contest->id,
            'problem_id' => $problem->id,
            'user_id' => auth()->user()->id,
            'answer' => $resultInt,
        ];

        $existingData = DB::table('contest_problem_user')
    ->where('contest_id', $contest->id)
    ->where('problem_id', $problem->id)
    ->where('user_id', auth()->user()->id)
    ->first();

        if(!$existingData){
            DB::table('contest_problem_user')->insert($data);
        }else{
            if($existingData->answer < $resultInt){
                $existingData->answer = $resultInt;
                $existingData->save();
            }
        }

        // dd(auth()->user()->name);
        return redirect('contest/'.$contest->slug);
    }
}
