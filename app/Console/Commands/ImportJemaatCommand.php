<?php

namespace App\Console\Commands;

use App\Imports\ImportJemaat;
use App\Models\PersonModel;
use Carbon\Carbon;
use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Facades\Excel;

class ImportJemaatCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import-jemaat';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        PersonModel::truncate();
        $data = Excel::toCollection(new ImportJemaat, public_path('excel/Sektor I.xlsx'));
        foreach ($data[0] as $i) {
            $data = [
                'code' => $i[0],
                'name' => $i[1],
                'jk' => $i[2],
                'date_of_birth' => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject((int)$i[3]))->format('d-m-Y'),
                'categorial' => $i[4],
            ];
        }
    }
}
