@extends('admin.dashboardLayout')
@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Add a musical pieces</h1>
    </div>
    <div class="flex justify-center mt-9">
        <form method="post" action="{{ asset('admin/pieceMusical/' . $pieceMusical->id) }}" enctype="multipart/form-data"
            class="w-full max-w-lg">

            @csrf
            @method('put')
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Titre Music
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" type="text" placeholder="Jane" name="titreMusic"
                        value="{{ $pieceMusical->titreMusic }}">
                    @error('titreMusic')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        artiste Name
                    </label>
                    <select
                        class="relative block w-full appearance-none my-2 rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm "
                        id="" name="artiste_id">
                        {{-- <option selected disabled hidden>Select Artiste</option> --}}
                        @foreach ($artistes as $artiste)
                            <option value="{{ $artiste->id }}"
                                {{ $artiste->id == $pieceMusical->artiste_id ? 'selected' : '' }}>{{ $artiste->firstName }}
                                {{ $artiste->lastName }}</option>
                        @endforeach
                    </select>
                    @error('artiste_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        image
                    </label>
                    <div class="w-32 mb-5">
                        <img src="{{ asset('storage/' . $pieceMusical->image) }}" alt="">
                    </div>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="file" placeholder="" name="image" value="{{ $pieceMusical->image }}">
                    @error('image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        music
                    </label>
                    <audio controls class="my-5" src="{{ asset('storage/' . $pieceMusical->music) }}"></audio>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="file" placeholder="" name="music" value="{{ $pieceMusical->music }}">
                    @error('music')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        writers
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="text" placeholder="writer , writer , writer" name="writers"
                        value="{{ $pieceMusical->writers }}">
                    @error('writers')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        words
                    </label>
                    <textarea
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="text" placeholder="" name="words" value="">{{ $pieceMusical->words }}</textarea>
                    @error('words')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                        langue
                    </label>
                    <select
                        class="relative block w-full appearance-none my-2 rounded-none rounded-t-md border px-3 py-2 text-[#5f6164] placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm "
                        id="languages" name="langue">
                        <option>Select Language</option>
                        <option value="af" {{ 'af' == $pieceMusical->langue ? 'selected' : '' }}>Afrikaans</option>
                        <option value="af" {{ 'af' == $pieceMusical->langue ? 'selected' : '' }}>Afrikaans</option>
                        <option value="sq" {{ 'sq' == $pieceMusical->langue ? 'selected' : '' }}>Albanian - shqip
                        </option>
                        <option value="am" {{ 'am' == $pieceMusical->langue ? 'selected' : '' }}>Amharic - አማርኛ
                        </option>
                        <option value="ar" {{ 'ar' == $pieceMusical->langue ? 'selected' : '' }}>Arabic - العربية
                        </option>
                        <option value="an" {{ 'an' == $pieceMusical->langue ? 'selected' : '' }}>Aragonese - aragonés
                        </option>
                        <option value="hy" {{ 'hy' == $pieceMusical->langue ? 'selected' : '' }}>Armenian - հայերեն
                        </option>
                        <option value="ast" {{ 'ast' == $pieceMusical->langue ? 'selected' : '' }}>Asturian - asturianu
                        </option>
                        <option value="az" {{ 'az' == $pieceMusical->langue ? 'selected' : '' }}>Azerbaijani -
                            azərbaycan dili</option>
                        <option value="eu" {{ 'eu' == $pieceMusical->langue ? 'selected' : '' }}>Basque - euskara
                        </option>
                        <option value="be" {{ 'be' == $pieceMusical->langue ? 'selected' : '' }}>Belarusian -
                            беларуская</option>
                        <option value="bn" {{ 'bn' == $pieceMusical->langue ? 'selected' : '' }}>Bengali - বাংলা
                        </option>
                        <option value="bs" {{ 'bs' == $pieceMusical->langue ? 'selected' : '' }}>Bosnian - bosanski
                        </option>
                        <option value="br" {{ 'br' == $pieceMusical->langue ? 'selected' : '' }}>Breton - brezhoneg
                        </option>
                        <option value="bg" {{ 'bg' == $pieceMusical->langue ? 'selected' : '' }}>Bulgarian - български
                        </option>
                        <option value="ca" {{ 'ca' == $pieceMusical->langue ? 'selected' : '' }}>Catalan - català
                        </option>
                        <option value="ckb" {{ 'ckb' == $pieceMusical->langue ? 'selected' : '' }}>Central Kurdish -
                            کوردی (دەستنوسی عەرەبی)</option>
                        <option value="zh" {{ 'zh' == $pieceMusical->langue ? 'selected' : '' }}>Chinese - 中文</option>
                        <option value="zh-HK" {{ 'zh-HK' == $pieceMusical->langue ? 'selected' : '' }}>Chinese (Hong
                            Kong) - 中文（香港）</option>
                        <option value="zh-CN" {{ 'zh-CN' == $pieceMusical->langue ? 'selected' : '' }}>Chinese
                            (Simplified) - 中文（简体）</option>
                        <option value="zh-TW" {{ 'zh-TW' == $pieceMusical->langue ? 'selected' : '' }}>Chinese
                            (Traditional) - 中文（繁體）</option>
                        <option value="co" {{ 'co' == $pieceMusical->langue ? 'selected' : '' }}>Corsican</option>
                        <option value="hr" {{ 'hr' == $pieceMusical->langue ? 'selected' : '' }}>Croatian - hrvatski
                        </option>
                        <option value="cs" {{ 'cs' == $pieceMusical->langue ? 'selected' : '' }}>Czech - čeština
                        </option>
                        <option value="da" {{ 'da' == $pieceMusical->langue ? 'selected' : '' }}>Danish - dansk
                        </option>
                        <option value="nl" {{ 'nl' == $pieceMusical->langue ? 'selected' : '' }}>Dutch - Nederlands
                        </option>
                        <option value="en" {{ 'en' == $pieceMusical->langue ? 'selected' : '' }}>English</option>
                        <option value="en-AU" {{ 'en-AU' == $pieceMusical->langue ? 'selected' : '' }}>English
                            (Australia)</option>
                        <option value="en-CA" {{ 'en-CA' == $pieceMusical->langue ? 'selected' : '' }}>English (Canada)
                        </option>
                        <option value="en-IN" {{ 'en-IN' == $pieceMusical->langue ? 'selected' : '' }}>English (India)
                        </option>
                        <option value="en-NZ" {{ 'en-NZ' == $pieceMusical->langue ? 'selected' : '' }}>English (New
                            Zealand)</option>
                        <option value="en-ZA" {{ 'en-ZA' == $pieceMusical->langue ? 'selected' : '' }}>English (South
                            Africa)</option>
                        <option value="en-GB" {{ 'en-GB' == $pieceMusical->langue ? 'selected' : '' }}>English (United
                            Kingdom)</option>
                        <option value="en-US" {{ 'en-US' == $pieceMusical->langue ? 'selected' : '' }}>English (United
                            States)</option>
                        <option value="eo" {{ 'ckb' == $pieceMusical->langue ? 'selected' : '' }}>Esperanto -
                            esperanto</option>
                        <option value="et" {{ 'ckb' == $pieceMusical->langue ? 'selected' : '' }}>Estonian - eesti
                        </option>
                        <option value="fo" {{ 'ckb' == $pieceMusical->langue ? 'selected' : '' }}>Faroese - føroyskt
                        </option>
                        <option value="fil" {{ 'fil' == $pieceMusical->langue ? 'selected' : '' }}>Filipino</option>
                        <option value="fi" {{ 'fi' == $pieceMusical->langue ? 'selected' : '' }}>Finnish - suomi
                        </option>
                        <option value="fr" {{ 'fr' == $pieceMusical->langue ? 'selected' : '' }}>French - français
                        </option>
                        <option value="fr-CA" {{ 'fr-CA' == $pieceMusical->langue ? 'selected' : '' }}>French (Canada) -
                            français (Canada)</option>
                        <option value="fr-FR" {{ 'fr-FR' == $pieceMusical->langue ? 'selected' : '' }}>French (France) -
                            français (France)</option>
                        <option value="fr-CH" {{ 'fr-CH' == $pieceMusical->langue ? 'selected' : '' }}>French
                            (Switzerland) - français (Suisse)</option>
                        <option value="gl" {{ 'gl' == $pieceMusical->langue ? 'selected' : '' }}>Galician - galego
                        </option>
                        <option value="ka" {{ 'ka' == $pieceMusical->langue ? 'selected' : '' }}>Georgian - ქართული
                        </option>
                        <option value="de" {{ 'de' == $pieceMusical->langue ? 'selected' : '' }}>German - Deutsch
                        </option>
                        <option value="de-AT" {{ 'de-AT' == $pieceMusical->langue ? 'selected' : '' }}>German (Austria) -
                            Deutsch (Österreich)</option>
                        <option value="de-DE" {{ 'de-DE' == $pieceMusical->langue ? 'selected' : '' }}>German (Germany) -
                            Deutsch (Deutschland)</option>
                        <option value="de-LI" {{ 'de-LI' == $pieceMusical->langue ? 'selected' : '' }}>German
                            (Liechtenstein) - Deutsch (Liechtenstein)</option>
                        <option value="de-CH" {{ 'de-CH' == $pieceMusical->langue ? 'selected' : '' }}>German
                            (Switzerland) - Deutsch (Schweiz)</option>
                        <option value="el" {{ 'el' == $pieceMusical->langue ? 'selected' : '' }}>Greek - Ελληνικά
                        </option>
                        <option value="gn" {{ 'gn' == $pieceMusical->langue ? 'selected' : '' }}>Guarani</option>
                        <option value="gu" {{ 'gu' == $pieceMusical->langue ? 'selected' : '' }}>Gujarati - ગુજરાતી
                        </option>
                        <option value="ha" {{ 'ha' == $pieceMusical->langue ? 'selected' : '' }}>Hausa</option>
                        <option value="he" {{ 'he' == $pieceMusical->langue ? 'selected' : '' }}>Hebrew - עברית
                        </option>
                        <option value="hi" {{ 'hi' == $pieceMusical->langue ? 'selected' : '' }}>Hindi - हिन्दी
                        </option>
                        <option value="hu" {{ 'hu' == $pieceMusical->langue ? 'selected' : '' }}>Hungarian - magyar
                        </option>
                        <option value="is" {{ 'is' == $pieceMusical->langue ? 'selected' : '' }}>Icelandic - íslenska
                        </option>
                        <option value="id" {{ 'id' == $pieceMusical->langue ? 'selected' : '' }}>Indonesian -
                            Indonesia</option>
                        <option value="ia" {{ 'ia' == $pieceMusical->langue ? 'selected' : '' }}>Interlingua</option>
                        <option value="ga" {{ 'ga' == $pieceMusical->langue ? 'selected' : '' }}>Irish - Gaeilge
                        </option>
                        <option value="it" {{ 'it' == $pieceMusical->langue ? 'selected' : '' }}>Italian - italiano
                        </option>
                        <option value="it-IT" {{ 'it-IT' == $pieceMusical->langue ? 'selected' : '' }}>Italian (Italy) -
                            italiano (Italia)</option>
                        <option value="it-CH" {{ 'it-CH' == $pieceMusical->langue ? 'selected' : '' }}>Italian
                            (Switzerland) - italiano (Svizzera)</option>
                        <option value="ja" {{ 'ja' == $pieceMusical->langue ? 'selected' : '' }}>Japanese - 日本語
                        </option>
                        <option value="kn" {{ 'kn' == $pieceMusical->langue ? 'selected' : '' }}>Kannada - ಕನ್ನಡ
                        </option>
                        <option value="kk" {{ 'kk' == $pieceMusical->langue ? 'selected' : '' }}>Kazakh - қазақ тілі
                        </option>
                        <option value="km" {{ 'km' == $pieceMusical->langue ? 'selected' : '' }}>Khmer - ខ្មែរ
                        </option>
                        <option value="ko" {{ 'ko' == $pieceMusical->langue ? 'selected' : '' }}>Korean - 한국어</option>
                        <option value="ku" {{ 'ku' == $pieceMusical->langue ? 'selected' : '' }}>Kurdish - Kurdî
                        </option>
                        <option value="ky" {{ 'ky' == $pieceMusical->langue ? 'selected' : '' }}>Kyrgyz - кыргызча
                        </option>
                        <option value="lo" {{ 'lo' == $pieceMusical->langue ? 'selected' : '' }}>Lao - ລາວ</option>
                        <option value="la" {{ 'la' == $pieceMusical->langue ? 'selected' : '' }}>Latin</option>
                        <option value="lv" {{ 'lv' == $pieceMusical->langue ? 'selected' : '' }}>Latvian - latviešu
                        </option>
                        <option value="ln" {{ 'ln' == $pieceMusical->langue ? 'selected' : '' }}>Lingala - lingála
                        </option>
                        <option value="lt" {{ 'lt' == $pieceMusical->langue ? 'selected' : '' }}>Lithuanian - lietuvių
                        </option>
                        <option value="mk" {{ 'mk' == $pieceMusical->langue ? 'selected' : '' }}>Macedonian -
                            македонски</option>
                        <option value="ms" {{ 'ms' == $pieceMusical->langue ? 'selected' : '' }}>Malay - Bahasa Melayu
                        </option>
                        <option value="ml" {{ 'ml' == $pieceMusical->langue ? 'selected' : '' }}>Malayalam - മലയാളം
                        </option>
                        <option value="mt" {{ 'mt' == $pieceMusical->langue ? 'selected' : '' }}>Maltese - Malti
                        </option>
                        <option value="mr" {{ 'mr' == $pieceMusical->langue ? 'selected' : '' }}>Marathi - मराठी
                        </option>
                        <option value="mn" {{ 'mn' == $pieceMusical->langue ? 'selected' : '' }}>Mongolian - монгол
                        </option>
                        <option value="ne" {{ 'ne' == $pieceMusical->langue ? 'selected' : '' }}>Nepali - नेपाली
                        </option>
                        <option value="no" {{ 'no' == $pieceMusical->langue ? 'selected' : '' }}>Norwegian - norsk
                        </option>
                        <option value="nb" {{ 'nb' == $pieceMusical->langue ? 'selected' : '' }}>Norwegian Bokmål -
                            norsk bokmål</option>
                        <option value="nn" {{ 'nn' == $pieceMusical->langue ? 'selected' : '' }}>Norwegian Nynorsk -
                            nynorsk</option>
                        <option value="oc" {{ 'oc' == $pieceMusical->langue ? 'selected' : '' }}>Occitan</option>
                        <option value="or" {{ 'or' == $pieceMusical->langue ? 'selected' : '' }}>Oriya - ଓଡ଼ିଆ
                        </option>
                        <option value="om" {{ 'om' == $pieceMusical->langue ? 'selected' : '' }}>Oromo - Oromoo
                        </option>
                        <option value="ps" {{ 'ps' == $pieceMusical->langue ? 'selected' : '' }}>Pashto - پښتو
                        </option>
                        <option value="fa" {{ 'fa' == $pieceMusical->langue ? 'selected' : '' }}>Persian - فارسی
                        </option>
                        <option value="pl" {{ 'pl' == $pieceMusical->langue ? 'selected' : '' }}>Polish - polski
                        </option>
                        <option value="pt" {{ 'pt' == $pieceMusical->langue ? 'selected' : '' }}>Portuguese -
                            português</option>
                        <option value="pt-BR" {{ 'pt-BR' == $pieceMusical->langue ? 'selected' : '' }}>Portuguese
                            (Brazil) - português (Brasil)</option>
                        <option value="pt-PT" {{ 'pt-PT' == $pieceMusical->langue ? 'selected' : '' }}>Portuguese
                            (Portugal) - português (Portugal)</option>
                        <option value="pa" {{ 'pa' == $pieceMusical->langue ? 'selected' : '' }}>Punjabi - ਪੰਜਾਬੀ
                        </option>
                        <option value="qu" {{ 'qu' == $pieceMusical->langue ? 'selected' : '' }}>Quechua</option>
                        <option value="ro" {{ 'ro' == $pieceMusical->langue ? 'selected' : '' }}>Romanian - română
                        </option>
                        <option value="mo" {{ 'mo' == $pieceMusical->langue ? 'selected' : '' }}>Romanian (Moldova) -
                            română (Moldova)</option>
                        <option value="rm" {{ 'rm' == $pieceMusical->langue ? 'selected' : '' }}>Romansh - rumantsch
                        </option>
                        <option value="ru" {{ 'ru' == $pieceMusical->langue ? 'selected' : '' }}>Russian - русский
                        </option>
                        <option value="gd" {{ 'gd' == $pieceMusical->langue ? 'selected' : '' }}>Scottish Gaelic
                        </option>
                        <option value="sr" {{ 'sr' == $pieceMusical->langue ? 'selected' : '' }}>Serbian - српски
                        </option>
                        <option value="sh" {{ 'sh' == $pieceMusical->langue ? 'selected' : '' }}>Serbo-Croatian -
                            Srpskohrvatski</option>
                        <option value="sn" {{ 'sn' == $pieceMusical->langue ? 'selected' : '' }}>Shona - chiShona
                        </option>
                        <option value="sd" {{ 'sd' == $pieceMusical->langue ? 'selected' : '' }}>Sindhi</option>
                        <option value="si" {{ 'si' == $pieceMusical->langue ? 'selected' : '' }}>Sinhala - සිංහල
                        </option>
                        <option value="sk" {{ 'sk' == $pieceMusical->langue ? 'selected' : '' }}>Slovak - slovenčina
                        </option>
                        <option value="sl" {{ 'sl' == $pieceMusical->langue ? 'selected' : '' }}>Slovenian -
                            slovenščina</option>
                        <option value="so" {{ 'so' == $pieceMusical->langue ? 'selected' : '' }}>Somali - Soomaali
                        </option>
                        <option value="st" {{ 'st' == $pieceMusical->langue ? 'selected' : '' }}>Southern Sotho
                        </option>
                        <option value="es" {{ 'es' == $pieceMusical->langue ? 'selected' : '' }}>Spanish - español
                        </option>
                        <option value="es-AR" {{ 'es-AR' == $pieceMusical->langue ? 'selected' : '' }}>Spanish
                            (Argentina) - español (Argentina)</option>
                        <option value="es-419" {{ 'es-419' == $pieceMusical->langue ? 'selected' : '' }}>Spanish (Latin
                            America) - español (Latinoamérica)</option>
                        <option value="es-MX" {{ 'es-MX' == $pieceMusical->langue ? 'selected' : '' }}>Spanish (Mexico)
                            -
                            español (México)</option>
                        <option value="es-ES" {{ 'es-ES' == $pieceMusical->langue ? 'selected' : '' }}>Spanish (Spain) -
                            español (España)</option>
                        <option value="es-US" {{ 'es-US' == $pieceMusical->langue ? 'selected' : '' }}>Spanish (United
                            States) - español (Estados Unidos)</option>
                        <option value="su" {{ 'su' == $pieceMusical->langue ? 'selected' : '' }}>Sundanese</option>
                        <option value="sw" {{ 'sw' == $pieceMusical->langue ? 'selected' : '' }}>Swahili - Kiswahili
                        </option>
                        <option value="sv" {{ 'sv' == $pieceMusical->langue ? 'selected' : '' }}>Swedish - svenska
                        </option>
                        <option value="tg" {{ 'tg' == $pieceMusical->langue ? 'selected' : '' }}>Tajik - тоҷикӣ
                        </option>
                        <option value="ta" {{ 'ta' == $pieceMusical->langue ? 'selected' : '' }}>Tamil - தமிழ்
                        </option>
                        <option value="tt" {{ 'tt' == $pieceMusical->langue ? 'selected' : '' }}>Tatar</option>
                        <option value="te" {{ 'te' == $pieceMusical->langue ? 'selected' : '' }}>Telugu - తెలుగు
                        </option>
                        <option value="th" {{ 'th' == $pieceMusical->langue ? 'selected' : '' }}>Thai - ไทย</option>
                        <option value="ti" {{ 'ti' == $pieceMusical->langue ? 'selected' : '' }}>Tigrinya - ትግርኛ
                        </option>
                        <option value="to" {{ 'to' == $pieceMusical->langue ? 'selected' : '' }}>Tongan - lea
                            fakatonga</option>
                        <option value="tr" {{ 'tr' == $pieceMusical->langue ? 'selected' : '' }}>Turkish - Türkçe
                        </option>
                        <option value="tk" {{ 'tk' == $pieceMusical->langue ? 'selected' : '' }}>Turkmen</option>
                        <option value="tw" {{ 'tw' == $pieceMusical->langue ? 'selected' : '' }}>Twi</option>
                        <option value="uk" {{ 'uk' == $pieceMusical->langue ? 'selected' : '' }}>Ukrainian -
                            українська</option>
                        <option value="ur" {{ 'ur' == $pieceMusical->langue ? 'selected' : '' }}>Urdu - اردو</option>
                        <option value="ug" {{ 'ug' == $pieceMusical->langue ? 'selected' : '' }}>Uyghur</option>
                        <option value="uz" {{ 'uz' == $pieceMusical->langue ? 'selected' : '' }}>Uzbek - o‘zbek
                        </option>
                        <option value="vi" {{ 'vi' == $pieceMusical->langue ? 'selected' : '' }}>Vietnamese - Tiếng
                            Việt</option>
                        <option value="wa" {{ 'wa' == $pieceMusical->langue ? 'selected' : '' }}>Walloon - wa
                        </option>
                        <option value="cy" {{ 'cy' == $pieceMusical->langue ? 'selected' : '' }}>Welsh - Cymraeg
                        </option>
                        <option value="fy" {{ 'fy' == $pieceMusical->langue ? 'selected' : '' }}>Western Frisian
                        </option>
                        <option value="xh" {{ 'xh' == $pieceMusical->langue ? 'selected' : '' }}>Xhosa</option>
                        <option value="yi" {{ 'yi' == $pieceMusical->langue ? 'selected' : '' }}>Yiddish</option>
                        <option value="yo" {{ 'yo' == $pieceMusical->langue ? 'selected' : '' }}>Yoruba - Èdè Yorùbá
                        </option>
                        <option value="zu" {{ 'zu' == $pieceMusical->langue ? 'selected' : '' }}>Zulu - isiZulu
                        </option>
                    </select>
                    @error('langue')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        duration
                    </label>
                    <div class="relative">
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="" type="number" placeholder="Ex : 2.20 min" name="duration"
                            value="{{ $pieceMusical->duration }}">

                        @error('duration')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        release date
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="" type="date" placeholder="90210" name="release_date"
                        value="{{ $pieceMusical->release_date }}">
                    @error('release_date')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


            </div>
            <input type="submit" value="submit"
                class="mt-6 bg-blue-500 w-24 text-center hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" />
        </form>
    </div>
@endsection
