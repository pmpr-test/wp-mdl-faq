<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec71ab582             |
    |_______________________________________|
*/
 namespace Pmpr\Module\FAQ; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Page\Page as BaseClass; use Pmpr\Module\FAQ\Model\Question; class Page extends BaseClass { public function __construct() { $this->slug = "\146\141\161"; $this->isPrivate = false; $this->hasBreadcrumb = true; parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\x46\x72\145\161\x75\x65\x6e\164\154\x79\40\101\163\x6b\145\x64\x20\121\165\x65\x73\x74\x69\x6f\x6e\163", PR__MDL__FAQ); } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { if (!($ouuscogyemygyuyi = Question::symcgieuakksimmu())) { goto qogqewiwmwiwskgm; } $cuueaykuqqkueici = $ouuscogyemygyuyi->cwkywyqksyucoyia([Constants::ciywsqoeiymemsys => Constants::wmmucsiyiyusmssm, Constants::iuqumwggccmcuyem => [Constants::ciyoccqkiamemcmm => Constants::eeccqomoaqsawouy, Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw]]); $suuagcecoyuweoqk = ''; foreach ($cuueaykuqqkueici as $cgiaqqwoogcwuuwq) { $suuagcecoyuweoqk .= $this->iuygowkemiiwqmiw("\x71\x75\145\163\164\x69\x6f\156", ["\x71\x75\x65\163\164\x69\157\156" => $cgiaqqwoogcwuuwq]); qiaqsassksqiuyae: } cecuyayqoioasumi: $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\x70\x61\x67\x65", ["\154\x69\163\x74" => $suuagcecoyuweoqk, "\161\165\x65\163\164\151\x6f\x6e\x73" => $cuueaykuqqkueici, Constants::ssmskyqgcmeiayco => $ewgwqamkygiqaawc]); qogqewiwmwiwskgm: return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }