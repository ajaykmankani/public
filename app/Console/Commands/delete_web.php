<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class delete_web extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete_web';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Define the path to the web.php file
        $webFilePath = base_path('routes/web.php');

        // Define the path to the Controllers folder
        $controllerFolderPath = app_path('Http/Controllers');

        // Check if the web.php file exists before attempting to delete it
        if (file_exists($webFilePath)) {
            // Delete the web.php file
            unlink($webFilePath);
            $this->info('web.php file has been deleted.');
        } else {
            $this->error('web.php file not found.');
        }

        // Check if the Controllers folder exists before attempting to delete it
        if (is_dir($controllerFolderPath)) {
            // Use a recursive function to delete the folder and its contents
            $this->deleteDirectory($controllerFolderPath);
            $this->info('Controllers folder has been deleted.');
        } else {
            $this->error('Controllers folder not found.');
        }
    }

    // Recursive function to delete a directory and its contents
    private function deleteDirectory($directory)
    {
        if (is_dir($directory)) {
            $files = scandir($directory);
            foreach ($files as $file) {
                if ($file !== "." && $file !== "..") {
                    $path = $directory . DIRECTORY_SEPARATOR . $file;
                    if (is_dir($path)) {
                        // Recursive call to delete subdirectories
                        $this->deleteDirectory($path);
                    } else {
                        // Delete files
                        unlink($path);
                    }
                }
            }
            // Remove the empty directory
            rmdir($directory);
        }
    }
}
