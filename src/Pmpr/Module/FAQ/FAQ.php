<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68010620cc319             |
    |_______________________________________|
*/
 namespace Pmpr\Module\FAQ; use Pmpr\Common\Foundation\Container\ModuleInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\FAQ\Model\Question; class FAQ extends ModuleInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('FAQ', PR__MDL__FAQ); }, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ($owaoeyikmqaeegma->ligksaggegsygqwo()) { Page::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->awumyiewiaosiyyy()) { Question::symcgieuakksimmu(); } } }
