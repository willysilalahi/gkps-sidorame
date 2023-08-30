<?php

namespace App\Console\Commands;

use App\Imports\ImportJemaat;
use App\Models\FamilyModel;
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
    protected $signature = 'import-jemaat {sector}';

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
        $id = $this->argument('sector');
        $data = Excel::toCollection(new ImportJemaat, public_path('excel/Sektor ' . $id . '.xlsx'));
        foreach ($data[0] as $key => $i) {
            if ($key == 0) {
                continue;
            }
            $code_type = explode('_', $i[0]);
            $tmp_code = 'S0' . $id . '-' . $code_type[0];
            $family = FamilyModel::where('code', $tmp_code)->first();
            if (!$family) {
                $family = FamilyModel::create([
                    'sectors_id' => $id,
                    'code' => $tmp_code,
                    'type' => $code_type[1]
                ]);
            }
            $person = PersonModel::create([
                'family_id' => $family->id,
                'name' => $i[1],
                'gender' => $i[2],
                'date_of_birth' => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject((int)$i[3]))->format('Y-m-d'),
                'categorial' => $i[4]
            ]);
            $this->info('Jemaat dengan nama ' . $person->name . ' sudah ditambahkan!');
        }
        $this->info('Selesai. Diatei Tupa');
    }
}
