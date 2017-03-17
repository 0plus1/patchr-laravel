<?php namespace Zeroplusone\Patchr\Laravel\Console\Commands;

use Illuminate\Console\Command;
use Zeroplusone\Patchr\Patchr;

/**
 * Class PatchrCLI
 * @package Zeroplusone\Patchr\Laravel\Console\Commands
 * TODO: Refactor into patchr:do {extra} format
 */
class PatchrCLI extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'patchr {do} {extra?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run a patchr command';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $output = '';
        $patchr = new Patchr( config('patchr') );

        $this->info( '[patchr::'. $this->argument('do').'] started' );

        switch( $this->argument('do') )
        {
            case 'applyDatabasePatches':
                $output = $patchr->applyDatabasePatches();
                break;
            case 'reservePatches':
                if( !$this->argument('extra') )
                {
                    $this->error('Missing Number of Patches to reserve');
                    return;
                }
                $output = $patchr->reservePatches( $this->argument('extra') );
                break;
            case 'addNewPatch':
                if( !$this->argument('extra') )
                {
                    $this->error('Missing SQL Code');
                    return;
                }
                $output = $patchr->addNewPatch( $this->argument('extra') );
                break;
            case 'getUnappliedPatches':
                $output = $patchr->getUnappliedPatches();
                break;
            case 'getLatestAppliedPatch':
                $output = $patchr->getLatestAppliedPatch();
                break;
            default:
                $this->error('Command not found: ['.$this->argument('do').']');
                break;
        }

        if($output['success'] === TRUE) {
            $this->info( $output['output'] );
        } else {
            $this->error( $output['error'] );
        }
    }
}
