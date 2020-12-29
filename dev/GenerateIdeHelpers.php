<?php

namespace CarbonMacros\Dev;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class GenerateIdeHelpers extends Command
{
    protected $signature = 'generate-ide-helpers';
    protected $description = 'Generates the IDE helpers';

    public function __invoke()
    {
        $files = $this->getTraitFiles();

        $files = $files->flatMap(function (string $fileName) {
            $matches = [];

            preg_match_all(
                '/Carbon::macro\([\'"]{1}(?P<macros>[a-zA-Z]{1}[\w\d]*)[\'"]{1}/',
                file_get_contents($fileName),
                $matches
            );

            return collect($matches['macros'])->sort();
        })
        ->map(function (string $macroMethod) {
            return "     * @method bool $macroMethod";
        });

        $header = $this->getFileHeader();
        $content = $files->implode(PHP_EOL);
        $footer = $this->getFileFooter();

        file_put_contents(lcm_path('carbon-macros-helper.php'), $header . $content . $footer);
    }

    protected function getFileHeader(): string
    {
        return <<<EOT
<?php

namespace Illuminate\Support {
    /**
     * Carbon

EOT;
    }

    protected function getFileFooter(): string
    {
        return <<<EOT
    */
    class Carbon extends \Carbon\Carbon {}
}
EOT;

    }

    protected function getTraitFiles(): Collection
    {
        return collect(scandir(lcm_path('src/traits')))
            ->filter(function ($file) {
                return Str::endsWith($file, '.php');
            })
            ->map(function (string $fileName) {
                return lcm_path("src/traits/$fileName");
            })
            ->values();
    }
}