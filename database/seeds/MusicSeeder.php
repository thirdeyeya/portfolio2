<?php

use Illuminate\Database\Seeder;
use App\Music;
class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Music::truncate();
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=QdvaYmxtwUU',
            'title' => 'CORE PRIDE',
            'artist_name' => 'UVERworld',
            'anime_official_cite' => 'https://www.ao-ex.com/tv/',
            'artist_official_cite' => 'https://www.uverworld.jp/',
            'image_path' => 'img/CORE PRIDE.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 1
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=QqaK9st80F4',
            'title' => 'Cagayake!GIRLS',
            'artist_name' => '放課後ティータイム',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/k-on/',
            'artist_official_cite' => 'https://www.tbs.co.jp/anime/k-on/',
            'image_path' => 'img/cagayake!girls.jpg',
            'genre_id' => 3,
            'music_tone_id' => 3,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 2
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=5CSNv9MNEC4',
            'title' => 'Don\'t say "lazy"',
            'artist_name' => '放課後ティータイム',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/k-on/',
            'artist_official_cite' => 'https://www.tbs.co.jp/anime/k-on/',
            'image_path' => 'img/don\'tsaylazy.jpg',
            'genre_id' => 3,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 2
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=EV-bDK_aipw',
            'title' => 'GO! GO! MANIAC',
            'artist_name' => '放課後ティータイム',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/k-on/k-on_tv/',
            'artist_official_cite' => 'https://www.tbs.co.jp/anime/k-on/k-on_tv/',
            'image_path' => 'img/gogomaniac.jpg',
            'genre_id' => 3,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 3
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=0GFoVZyIIM0',
            'title' => 'Listen!!',
            'artist_name' => '放課後ティータイム',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/k-on/k-on_tv/',
            'artist_official_cite' => 'https://www.tbs.co.jp/anime/k-on/k-on_tv/',
            'image_path' => 'img/listen.jpg',
            'genre_id' => 3,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 3
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=cRQcZ68t-_o',
            'title' => 'Utauyo!!MIRACLE',
            'artist_name' => '放課後ティータイム',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/k-on/k-on_tv/',
            'artist_official_cite' => 'https://www.tbs.co.jp/anime/k-on/k-on_tv/',
            'image_path' => 'img/utauyomiracle.jpg',
            'genre_id' => 3,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 3
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=cAPhpGxvV_0',
            'title' => 'NO,Thank You!',
            'artist_name' => '放課後ティータイム',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/k-on/k-on_tv/',
            'artist_official_cite' => 'https://www.tbs.co.jp/anime/k-on/k-on_tv/',
            'image_path' => 'img/no thank you.jpg',
            'genre_id' => 3,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 3
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=IViBa93EUG8',
            'title' => 'Take off',
            'artist_name' => '2PM',
            'anime_official_cite' => 'https://www.ao-ex.com/tv/',
            'artist_official_cite' => 'https://www.2pmjapan.com/',
            'image_path' => 'img/take off.jpg',
            'genre_id' => 4,
            'music_tone_id' => 4,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 1 
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=96yO-kxufVY',
            'title' => 'Renegade',
            'artist_name' => 'STEREO DIVE FOUNDATION',
            'anime_official_cite' => 'https://gangsta-project.com/',
            'artist_official_cite' => 'https://www.lantis.jp/artist/stereodivefoundation/',
            'image_path' => 'img/renegade.jpg',
            'genre_id' => 4,
            'music_tone_id' => 4,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 4 
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=uBHhjcGNCKM',
            'title' => '夜の国',
            'artist_name' => 'Annabel',
            'anime_official_cite' => 'https://gangsta-project.com/',
            'artist_official_cite' => 'http://annabel.jp/',
            'image_path' => 'img/yorunokuni.jpg',
            'genre_id' => 2,
            'music_tone_id' => 5,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 4 
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ROpGaQiTVm0',
            'title' => 'Spirit Inspiration',
            'artist_name' => 'Nothing\'s Carved In Stone',
            'anime_official_cite' => 'https://www.zetsuen.net/',
            'artist_official_cite' => 'https://www.ncis.jp/',
            'image_path' => 'img/spirit inspiration.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 5 
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=7GmHVijel-Y',
            'title' => 'happy endings',
            'artist_name' => '花澤香菜',
            'anime_official_cite' => 'https://www.zetsuen.net/',
            'artist_official_cite' => 'https://hanazawa-kana.com/',
            'image_path' => 'img/happy endings.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 5 
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=J69oCCM1EcI',
            'title' => '午夜の待ち合わせ',
            'artist_name' => 'Hello Sleepwalkers',
            'anime_official_cite' => 'https://noragami-anime.net/',
            'artist_official_cite' => 'https://hellosleepwalkers.com/',
            'image_path' => 'img/goyanomatiawase.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 6 
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=swiGhBa5zgc',
            'title' => 'ハートリアライズ',
            'artist_name' => 'Tia',
            'anime_official_cite' => 'https://noragami-anime.net/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/TIA/',
            'image_path' => 'img/ha-toriaraizu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 6 
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=qMHn2k5FAm4',
            'title' => '狂乱 Hey Kids!!',
            'artist_name' => 'THE ORAL CIGARETTES',
            'anime_official_cite' => 'https://noragami-anime.net/',
            'artist_official_cite' => 'https://theoralcigarettes.com/',
            'image_path' => 'img/kyourannheykids.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 7 
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=gb9LSTJXm_E',
            'title' => 'ニルバナ',
            'artist_name' => 'Tia',
            'anime_official_cite' => 'https://noragami-anime.net/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/TIA/',
            'image_path' => 'img/ニルバナ.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 7 
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=h1du2TgjBXA',
            'title' => 'Flat',
            'artist_name' => 'livetune adding Yuuki Ozaki (from Galileo Galilei)',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/hamatora/index2.html',
            'artist_official_cite' => 'https://www.galileogalilei.jp/',
            'image_path' => 'img/flat.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 8
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=h1du2TgjBXA',
            'title' => 'Hikari',
            'artist_name' => '羽多野 渉',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/hamatora/index2.html',
            'artist_official_cite' => 'https://hatanowataru.dive2ent.com/',
            'image_path' => 'img/hikari.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 8
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=h1du2TgjBXA',
            'title' => '千の翼',
            'artist_name' => 'livetune adding Takuro Sugawara(from 9mm Parabellum Bullet)',
            'anime_official_cite' => 'https://hamatorapj.com/reply/',
            'artist_official_cite' => 'https://9mm.jp/',
            'image_path' => 'img/sennnotubasa.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 9
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=DlESAt0BLLU',
            'title' => 'Brand New World',
            'artist_name' => 'ayami',
            'anime_official_cite' => 'https://hamatorapj.com/reply/',
            'artist_official_cite' => 'https://ayami.dive2ent.com/index.php',
            'image_path' => 'img/brand new world.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 9
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=9US7wh4oOjE',
            'title' => '空色デイズ',
            'artist_name' => '中川　翔子',
            'anime_official_cite' => 'https://www.gurren-lagann.net/tv/',
            'artist_official_cite' => 'https://www.shokotan.jp/',
            'image_path' => 'img/sorairodeizu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 4,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 10
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=840ba8odz_g',
            'title' => 'UNDERGROUND',
            'artist_name' => 'HIGH VOLTAGE',
            'anime_official_cite' => 'https://www.gurren-lagann.net/tv/',
            'artist_official_cite' => 'https://twitter.com/highvoltageinfo',
            'image_path' => 'img/undergraund.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 10
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=16hMsGBkMUs',
            'title' => 'LAMENT～やがて喜びを～',
            'artist_name' => '結城アイラ',
            'anime_official_cite' => 'https://fantasiabunko.jp/sp/201003denyuden/',
            'artist_official_cite' => 'https://www.lantis.jp/artist/yuukiaira/news.html',
            'image_path' => 'img/lament.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 11
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=7cf3b0wcPi4',
            'title' => 'Truth Of My Destiny',
            'artist_name' => 'Ceui',
            'anime_official_cite' => 'https://fantasiabunko.jp/sp/201003denyuden/',
            'artist_official_cite' => 'https://lantis.jp/artist/ceui/',
            'image_path' => 'img/truthofmydestiny.jpg',
            'genre_id' => 2,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 11
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=3wCZWEUHA3A',
            'title' => '君の神話 〜アクエリオン第二章〜',
            'artist_name' => 'AKINO with bless4',
            'anime_official_cite' => 'http://aqevol.com/',
            'artist_official_cite' => 'http://bless4.jp/',
            'image_path' => 'img/kiminosinnwa.jpg',
            'genre_id' => 4,
            'music_tone_id' => 4,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 12
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=wLMyFgPjSio',
            'title' => '月光シンフォニア',
            'artist_name' => 'AKINO & AIKI from bless4',
            'anime_official_cite' => 'http://aqevol.com/',
            'artist_official_cite' => 'http://bless4.jp/',
            'image_path' => 'img/gekkousinnfonia.jpg',
            'genre_id' => 4,
            'music_tone_id' => 8,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 12
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=n0DDQZqfoXQ',
            'title' => 'Fantastic Time',
            'artist_name' => 'Hey! Say! JUMP',
            'anime_official_cite' => 'https://www.ytv.co.jp/timebokan24/',
            'artist_official_cite' => 'https://www.johnnys-net.jp/page?artist=15&id=artistTop',
            'image_path' => 'img/fantastictime.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 13
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=tjLjOPzKohA',
            'title' => 'TRUE LOVE',
            'artist_name' => '篠崎愛',
            'anime_official_cite' => 'https://www.ytv.co.jp/timebokan24/',
            'artist_official_cite' => 'https://shinozakiai0226.com/',
            'image_path' => 'img/true love.jpg',
            'genre_id' => 2,
            'music_tone_id' => 5,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 13
        ]);
        
        Music::create([
            'youtube' => 'https://twitter.com/ar55sz/status/916584403018452993',
            'title' => 'DESTINY',
            'artist_name' => 'KinKi Kids',
            'anime_official_cite' => 'https://www.ytv.co.jp/timebokan/',
            'artist_official_cite' => 'https://www.johnnys-net.jp/page?artist=8&id=artistTop',
            'image_path' => 'img/destiny.jpg',
            'genre_id' => 4,
            'music_tone_id' => 10,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 14
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=AuzrpetwZyg',
            'title' => '20xx',
            'artist_name' => '夢みるアドレセンス',
            'anime_official_cite' => 'https://www.ytv.co.jp/timebokan/',
            'artist_official_cite' => 'https://yumeado.jp/',
            'image_path' => 'img/20xx.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 14
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=9d2iLvb3mwQ',
            'title' => 'daze',
            'artist_name' => 'じん ft.メイリア from GARNiDELiA',
            'anime_official_cite' => 'https://www.mekakucityactors.com/',
            'artist_official_cite' => 'https://www.garnidelia.com/',
            'image_path' => 'img/dazeanddays.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 15
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=2sPDPr3S7Zg',
            'title' => 'days',
            'artist_name' => 'じん ft. Lia',
            'anime_official_cite' => 'https://www.mekakucityactors.com/',
            'artist_official_cite' => 'https://1stplace.co.jp/business/artist_management/lia',
            'image_path' => 'img/dazeanddays.jpg',
            'genre_id' => 2,
            'music_tone_id' => 8,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 15
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=VrOOigt76K0',
            'title' => 'found & lost',
            'artist_name' => 'Survive Said The Prophet',
            'anime_official_cite' => 'https://bananafish.tv/',
            'artist_official_cite' => 'https://survivesaidtheprophet.com/',
            'image_path' => 'img/found&lost.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 16
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=L-Bzhpm8h0o',
            'title' => 'Prayer X',
            'artist_name' => 'King Gnu',
            'anime_official_cite' => 'https://bananafish.tv/',
            'artist_official_cite' => 'https://kinggnu.jp/',
            'image_path' => 'img/playerx.jpg',
            'genre_id' => 2,
            'music_tone_id' => 8,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 16
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=tWcLSL5PKm4',
            'title' => 'QUADRANGLE',
            'artist_name' => 'REASON TRIANGLE',
            'anime_official_cite' => 'http://jokergame.jp/',
            'artist_official_cite' => 'https://quadrangletheband.com/',
            'image_path' => 'img/reasontriangle.jpg',
            'genre_id' => 4,
            'music_tone_id' => 10,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 17
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=GHDhGuqSmIs',
            'title' => 'DOUBLE',
            'artist_name' => 'MAGIC OF LiFE',
            'anime_official_cite' => 'http://jokergame.jp/',
            'artist_official_cite' => 'https://magicoflife.jp/',
            'image_path' => 'img/double.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 17
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=2Hz0ijUQQns',
            'title' => '緋ノ糸輪廻ノGEMINI',
            'artist_name' => 'petit milady',
            'anime_official_cite' => 'http://warubure-anime.com/',
            'artist_official_cite' => 'https://www.universal-music.co.jp/petit-milady/',
            'image_path' => 'img/gemini.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 18
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=YhNFPByaoQ0',
            'title' => 'マグナ・イデア',
            'artist_name' => 'fortuna',
            'anime_official_cite' => 'http://warubure-anime.com/',
            'artist_official_cite' => '',
            'image_path' => 'img/magunaidea.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 18
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=-cjDIkPceQk',
            'title' => 'Shadow and Truth',
            'artist_name' => 'ONE III NOTES',
            'anime_official_cite' => 'https://acca-anime.com/',
            'artist_official_cite' => 'https://www.lantis.jp/artist/one3notes/bio.html',
            'image_path' => 'img/shadowandtruth.jpg',
            'genre_id' => 5,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 19
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=DZAG4alkf28',
            'title' => 'ペールムーンがゆれてる',
            'artist_name' => '結城アイラ',
            'anime_official_cite' => 'https://acca-anime.com/',
            'artist_official_cite' => 'https://www.lantis.jp/artist/yuukiaira/',
            'image_path' => 'img/pe-rumu-n.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 19
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=eGGgBB2W4w0',
            'title' => 'sky\'s the limit',
            'artist_name' => '平田志穂子',
            'anime_official_cite' => 'https://www.p4a.jp/',
            'artist_official_cite' => 'https://shihokohirata.com/',
            'image_path' => 'img/sky\'sthelimit.jpeg',
            'genre_id' => 6,
            'music_tone_id' => 10,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 20
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=PgabwpHNj5M',
            'title' => 'Beauty of Destiny',
            'artist_name' => '平田志穂子',
            'anime_official_cite' => 'https://www.p4a.jp/',
            'artist_official_cite' => 'https://shihokohirata.com/',
            'image_path' => 'img/beautyofdestiny.jpg',
            'genre_id' => 2,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 20
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=5VRyiaszGtA',
            'title' => 'JINGO JUNGLE',
            'artist_name' => 'MYTH & ROID',
            'anime_official_cite' => 'http://youjo-senki.jp/tv/',
            'artist_official_cite' => 'http://mythandroid.com/',
            'image_path' => 'img/jingo jungle.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 21
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=OgXZn_H_QAI',
            'title' => 'Los! Los! Los!',
            'artist_name' => 'Tanya Degurechaff (悠木 碧)',
            'anime_official_cite' => 'http://youjo-senki.jp/tv/',
            'artist_official_cite' => 'https://columbia.jp/yukiaoi/',
            'image_path' => 'img/losloslos.jpg',
            'genre_id' => 3,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 21
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Xa7vbqA_k2o',
            'title' => 'イノチノアカシ',
            'artist_name' => 'ZAQ',
            'anime_official_cite' => 'https://mahouritsu.com/',
            'artist_official_cite' => 'http://zaqzaqzaq.jp/',
            'image_path' => 'img/inotinoakasi.jpg',
            'genre_id' => 4,
            'music_tone_id' => 4,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 22
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=pkQHV_45Bpk',
            'title' => 'Proud Days',
            'artist_name' => 'NOW ON AIR',
            'anime_official_cite' => 'https://mahouritsu.com/',
            'artist_official_cite' => 'https://www.lantis.jp/artist/nowonair/',
            'image_path' => 'img/prouddays.jpg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 22
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=UnwPDd0IodQ',
            'title' => 'GIRIGIRI',
            'artist_name' => 'ソナーポケット',
            'anime_official_cite' => 'https://www.toei-anim.co.jp/tv/wt/wt01/',
            'artist_official_cite' => 'http://www.sonapoke.jp/',
            'image_path' => 'img/girigiri.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 23
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=vvDpqxq4x9w',
            'title' => 'アシタノヒカリ',
            'artist_name' => 'AAA',
            'anime_official_cite' => 'https://www.toei-anim.co.jp/tv/wt/wt01/',
            'artist_official_cite' => 'https://avex.jp/aaa/',
            'image_path' => 'img/asitanohikari.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 23
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=jbftD_c_47M',
            'title' => 'ドリームトリガー',
            'artist_name' => 'Pile',
            'anime_official_cite' => 'https://www.toei-anim.co.jp/tv/wt/wt01/',
            'artist_official_cite' => 'https://pile.asia/',
            'image_path' => 'img/dori-mutoriga-.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 23
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=lOGwN-W1fpM',
            'title' => 'カーストルーム',
            'artist_name' => 'ZAQ',
            'anime_official_cite' => 'http://you-zitsu.com/1st/',
            'artist_official_cite' => 'http://zaqzaqzaq.jp/',
            'image_path' => 'img/ka-sutoru-mu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 24
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=n4RvSSOUgww',
            'title' => 'Beautiful Solider',
            'artist_name' => 'Minami(栗林みな実)',
            'anime_official_cite' => 'http://you-zitsu.com/1st/',
            'artist_official_cite' => 'http://kuribayashi-minami.jp/',
            'image_path' => 'img/beautifulsoldier.jpg',
            'genre_id' => 4,
            'music_tone_id' => 5,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 24
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=XhoDGxppR7Y',
            'title' => 'TIT FOR TAT',
            'artist_name' => 'MYTH & ROID',
            'anime_official_cite' => 'http://shincho-yusha.jp/',
            'artist_official_cite' => 'http://mythandroid.com/',
            'image_path' => 'img/titfortat.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 25
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=jF--7B1MI90',
            'title' => 'be perfect, plz!',
            'artist_name' => '安月名 莉子',
            'anime_official_cite' => 'http://shincho-yusha.jp/',
            'artist_official_cite' => 'https://azuna-riko.com/',
            'image_path' => 'img/beperfectplz.jpg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 25
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=b6-2P8RgT0A',
            'title' => 'かくしん的☆めたまるふぉ～ぜっ！',
            'artist_name' => '土間うまる［CV.田中あいみ］',
            'anime_official_cite' => 'https://umaru-ani.me/1st/',
            'artist_official_cite' => 'https://aimi-official.jp/',
            'image_path' => 'img/kakusinnteki.jpg',
            'genre_id' => 3,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 26
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=SQvpK1eIlWk',
            'title' => 'ひだまりデイズ',
            'artist_name' => '妹S',
            'anime_official_cite' => 'https://umaru-ani.me/1st/',
            'artist_official_cite' => 'https://recochoku.jp/artist/2000916590/',
            'image_path' => 'img/hidamaridays.jpg',
            'genre_id' => 3,
            'music_tone_id' => 4,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 26
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=TyMx4pu7kA0',
            'title' => 'にめんせい☆ウラオモテライフ！',
            'artist_name' => '土間うまる［CV.田中あいみ］',
            'anime_official_cite' => 'https://umaru-ani.me/',
            'artist_official_cite' => 'https://aimi-official.jp/',
            'image_path' => 'img/uraomote.jpeg',
            'genre_id' => 3,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 27
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=rTZGtIoByTg',
            'title' => 'うまるん体操',
            'artist_name' => '妹S',
            'anime_official_cite' => 'https://umaru-ani.me/',
            'artist_official_cite' => 'https://recochoku.jp/artist/2000916590/',
            'image_path' => 'img/umarunntaisou.jpg',
            'genre_id' => 3,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 27
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Kt-gK-XA_HA',
            'title' => 'not GAME',
            'artist_name' => '畠中 祐',
            'anime_official_cite' => 'http://www.nhg-anime.com/',
            'artist_official_cite' => 'https://www.lantis.jp/artist/hatanakatasuku/',
            'image_path' => 'img/notgame.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 28
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=gbqO6GFeMvw',
            'title' => '僕を見つけて',
            'artist_name' => 'fhána',
            'anime_official_cite' => 'http://www.nhg-anime.com/',
            'artist_official_cite' => 'http://fhana.jp/',
            'image_path' => 'img/bokuwomitukete.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 28
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=DDD46sZN3JY',
            'title' => 'Easy Breezy',
            'artist_name' => 'chelmico',
            'anime_official_cite' => 'http://eizouken-anime.com/',
            'artist_official_cite' => 'http://chelmico.com/',
            'image_path' => 'img/easybreezy.jpg',
            'genre_id' => 7,
            'music_tone_id' => 10,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 29
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=gauEUNi0X_U',
            'title' => '名前のない青',
            'artist_name' => '神様、僕は気づいてしまった',
            'anime_official_cite' => 'http://eizouken-anime.com/',
            'artist_official_cite' => 'https://sp.wmg.jp/kamiboku/',
            'image_path' => 'img/namaenonaiao.jpg',
            'genre_id' => 1,
            'music_tone_id' => 5,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 29
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=4koCpY4iYhI',
            'title' => '町かどタンジェント',
            'artist_name' => 'shami momo',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/machikado/1st/',
            'artist_official_cite' => 'https://7net.omni7.jp/search/?keyword=%EF%BD%93%EF%BD%88%EF%BD%81%EF%BD%8D%EF%BD%89+%EF%BD%8D%EF%BD%8F%EF%BD%8D%EF%BD%8F%EF%BC%88%E5%90%89%E7%94%B0%E5%84%AA%E5%AD%90%E3%83%BB%E5%8D%83%E4%BB%A3%E7%94%B0%E6%A1%83%EF%BC%89',
            'image_path' => 'img/matikadotannjennt.jpg',
            'genre_id' => 3,
            'music_tone_id' => 3,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 30
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=S2_MZFHTYYk',
            'title' => 'よいまちカンターレ',
            'artist_name' => 'コーロまちカド',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/machikado/1st/',
            'artist_official_cite' => '',
            'image_path' => 'img/yoimatikannta-re.jpg',
            'genre_id' => 3,
            'music_tone_id' => 3,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 30
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=HpLOwMaxc8E',
            'title' => 'ZERO!!',
            'artist_name' => '栗林みな実',
            'anime_official_cite' => 'https://maousama.jp/1st/',
            'artist_official_cite' => 'http://kuribayashi-minami.jp/',
            'image_path' => 'img/zero.jpg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 31
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=HpLOwMaxc8E',
            'title' => '月花',
            'artist_name' => 'nano RIPE',
            'anime_official_cite' => 'https://maousama.jp/1st/',
            'artist_official_cite' => 'http://nanoripe.com/',
            'image_path' => 'img/sankakuep.jpeg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 31
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=gme1ffqskew',
            'title' => 'Clattanoia',
            'artist_name' => 'OxT',
            'anime_official_cite' => 'https://overlord-anime.com/_season1/',
            'artist_official_cite' => 'http://www.oxt-music.com/',
            'image_path' => 'img/clattanoia.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 32
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=skqKOt73rvM',
            'title' => 'L.L.L.',
            'artist_name' => 'MYTH & ROID',
            'anime_official_cite' => 'https://overlord-anime.com/_season1/',
            'artist_official_cite' => 'http://mythandroid.com/',
            'image_path' => 'img/l.l.l.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 32
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=njBp4VBFMBU',
            'title' => 'VORACITY',
            'artist_name' => 'MYTH&ROID',
            'anime_official_cite' => 'https://overlord-anime.com/_season2/',
            'artist_official_cite' => 'http://mythandroid.com/',
            'image_path' => 'img/voracity.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 33
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=oUfiB1XoLpc',
            'title' => 'Silent Solitude',
            'artist_name' => 'OxT',
            'anime_official_cite' => 'https://overlord-anime.com/_season2/',
            'artist_official_cite' => 'http://www.oxt-music.com/',
            'image_path' => 'img/silentsolitude.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 33
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=4NEbSnuL6GA',
            'title' => 'DADDY ! DADDY ! DO ! feat. 鈴木愛理',
            'artist_name' => '鈴木雅之',
            'anime_official_cite' => 'https://kaguya.love/2nd/',
            'artist_official_cite' => 'https://www.martin.jp/',
            'image_path' => 'img/daddydaddydo.jpg',
            'genre_id' => 8,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 34
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=l0Z6_6fi-HI',
            'title' => '風に吹かれて',
            'artist_name' => '福原 遥',
            'anime_official_cite' => 'https://kaguya.love/2nd/',
            'artist_official_cite' => 'https://www.ken-on.co.jp/haruka/',
            'image_path' => 'img/kazenihukarete.jpeg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 34
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=E3wWC6Cfikg',
            'title' => '時を刻む唄',
            'artist_name' => 'Lia',
            'anime_official_cite' => 'https://xn--tbs-zb4be5531k.co.jp/clannad/',
            'artist_official_cite' => 'https://1stplace.co.jp/business/artist_management/lia',
            'image_path' => 'img/tokiwokizamuuta.jpg',
            'genre_id' => 2,
            'music_tone_id' => 5,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 35
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=7_5jmB42wPQ',
            'title' => 'TORCH',
            'artist_name' => 'Lia',
            'anime_official_cite' => 'https://xn--tbs-zb4be5531k.co.jp/clannad/',
            'artist_official_cite' => 'https://1stplace.co.jp/business/artist_management/lia',
            'image_path' => 'img/tokiwokizamuuta.jpg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 35
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Gf2LI6Twrb0',
            'title' => 'Bravely You',
            'artist_name' => 'Lia',
            'anime_official_cite' => 'https://charlotte-anime.jp/',
            'artist_official_cite' => 'https://1stplace.co.jp/business/artist_management/lia',
            'image_path' => 'img/bravely you.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 36
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Y9OuMMe_Rnw',
            'title' => '灼け落ちない翼',
            'artist_name' => '多田葵',
            'anime_official_cite' => 'https://charlotte-anime.jp/',
            'artist_official_cite' => 'http://ssp-create.com/tadaaoi/',
            'image_path' => 'img/bravely you.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 36
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=PJidGp6Dxkw',
            'title' => 'My Soul,Your Beats',
            'artist_name' => 'Lia',
            'anime_official_cite' => 'https://www.angelbeats.jp/index2.html',
            'artist_official_cite' => 'https://1stplace.co.jp/business/artist_management/lia',
            'image_path' => 'img/mysoul,yourbeats.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 37
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ggDaBnQNRY0',
            'title' => 'Brave Song',
            'artist_name' => '多田葵',
            'anime_official_cite' => 'https://www.angelbeats.jp/index2.html',
            'artist_official_cite' => 'http://ssp-create.com/tadaaoi/',
            'image_path' => 'img/mysoul,yourbeats.jpg',
            'genre_id' => 4,
            'music_tone_id' => 12,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 37
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=5fr3Se8_zPU',
            'title' => 'Red fraction',
            'artist_name' => 'MELL',
            'anime_official_cite' => 'https://sundaygx.com/blacklagoon/anime/',
            'artist_official_cite' => 'http://nbcuni-music.com/ive/mell/index2.html',
            'image_path' => 'img/redfraction.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 38
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ydb2caDqWGY',
            'title' => 'Don\'t Look Behind',
            'artist_name' => 'EDISON',
            'anime_official_cite' => 'https://sundaygx.com/blacklagoon/anime/',
            'artist_official_cite' => 'https://columbia.jp/artist-info/edison/prof.html',
            'image_path' => 'img/don\'tlookbehind.jpg',
            'genre_id' => 2,
            'music_tone_id' => 8,
            'gender_id' => config('gender.ボーカルなし'),
            'anime_id' => 38
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=mitYwJ83TaE',
            'title' => 'Tank!',
            'artist_name' => 'SEATBELTS',
            'anime_official_cite' => 'http://www.cowboy-bebop.net/',
            'artist_official_cite' => 'https://okmusic.jp/%E3%82%B7%E3%83%BC%E3%83%88%E3%83%99%E3%83%AB%E3%83%84',
            'image_path' => 'img/tank.jpg',
            'genre_id' => 6,
            'music_tone_id' => 2,
            'gender_id' => config('gender.ボーカルなし'),
            'anime_id' => 39
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Q7-va0hr3aY',
            'title' => 'THE REAL FOLK BLUES',
            'artist_name' => '山根麻衣',
            'anime_official_cite' => 'http://www.cowboy-bebop.net/',
            'artist_official_cite' => 'https://www.a-sha.love/',
            'image_path' => 'img/therealforkblues.jpg',
            'genre_id' => 2,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 39
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=8tlXlJyXnHs',
            'title' => 'H.T',
            'artist_name' => '今堀恒雄',
            'anime_official_cite' => 'https://trigun-anime.com/',
            'artist_official_cite' => 'https://www.lmlnet.online/tsuneo-imahori',
            'image_path' => 'img/ht.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.ボーカルなし'),
            'anime_id' => 40
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=HFajXU6ZBwc',
            'title' => '風は未来に吹く',
            'artist_name' => '秋間　経夫',
            'anime_official_cite' => 'https://trigun-anime.com/',
            'artist_official_cite' => 'https://akimaandneos.com/',
            'image_path' => 'img/ht.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 40
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=XicdpSmxuT0',
            'title' => 'チキチキバンバン',
            'artist_name' => 'QUEENDOM',
            'anime_official_cite' => 'https://paripikoumei-anime.com/',
            'artist_official_cite' => '',
            'image_path' => 'img/tikitikibannbann.jpg',
            'genre_id' => 8,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 41
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=XicdpSmxuT0',
            'title' => '気分上々↑↑',
            'artist_name' => 'EIKO starring 96猫、諸葛孔明(CV：置鮎龍太郎)、KABE太人（CV：千葉翔也）、久遠七海 starring Lezel',
            'anime_official_cite' => 'https://paripikoumei-anime.com/',
            'artist_official_cite' => 'https://96neko.jp/',
            'image_path' => 'img/kibunnjoujou.jpg',
            'genre_id' => 5,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 41
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Nxw732Fux-8',
            'title' => 'Daydream Syndrome',
            'artist_name' => '藤原鞠菜',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/yumekui/',
            'artist_official_cite' => 'https://fujimari.com/',
            'image_path' => 'img/daydreamsyndrome.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 42
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=amPw49mjSMs',
            'title' => 'ユメとキボーとアシタのアタシ',
            'artist_name' => 'メリー・ナイトメア(CV:佐倉綾音)',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/yumekui/',
            'artist_official_cite' => 'https://www.aoni.co.jp/search/sakura-ayane.html',
            'image_path' => 'img/yumetokibo-toasitanoatasi.jpg',
            'genre_id' => 3,
            'music_tone_id' => 5,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 42
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=QaRmIOOKLE0',
            'title' => 'Sparkling Daydream',
            'artist_name' => 'ZAQ',
            'anime_official_cite' => 'http://www.anime-chu-2.com/tv/',
            'artist_official_cite' => 'http://zaqzaqzaq.jp/',
            'image_path' => 'img/sparklingdaydream.jpeg',
            'genre_id' => 4,
            'music_tone_id' => 4,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 43
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=vzlmkBMo-9E',
            'title' => 'INSIDE IDENTITY',
            'artist_name' => 'Black Raison d\'être',
            'anime_official_cite' => 'http://www.anime-chu-2.com/tv/',
            'artist_official_cite' => 'https://tower.jp/artist/2105299/Black-Raison-d\'etre',
            'image_path' => 'img/insideidentity.jpg',
            'genre_id' => 3,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 43
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=-F_nHlUfbkw',
            'title' => 'エクストラ・マジック・アワー',
            'artist_name' => 'AKINO with bless4',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/amaburi/',
            'artist_official_cite' => 'http://bless4.jp/',
            'image_path' => 'img/ekusutoramajikkuawa-.jpg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 44
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=UuwrxuwuHBY',
            'title' => 'エレメンタリオで会いましょう！',
            'artist_name' => 'BRILLIANT4',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/amaburi/',
            'artist_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/-/Artist/A024940.html',
            'image_path' => 'img/erementariodeaimasyou.jpg',
            'genre_id' => 3,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 44
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=lNUTsihbUjM',
            'title' => 'What\'s up,people?',
            'artist_name' => 'マキシマム ザ ホルモン',
            'anime_official_cite' => 'https://www.ntv.co.jp/deathnote/',
            'artist_official_cite' => 'http://www.55mth.com/pc/index.php',
            'image_path' => 'img/whatsuppeople.jpeg',
            'genre_id' => 1,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 45
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=tfVNWMr8DzQ',
            'title' => '絶望ビリー',
            'artist_name' => 'マキシマム ザ ホルモン',
            'anime_official_cite' => 'https://www.ntv.co.jp/deathnote/',
            'artist_official_cite' => 'http://www.55mth.com/pc/index.php',
            'image_path' => 'img/whatsuppeople.jpeg',
            'genre_id' => 1,
            'music_tone_id' => 4,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 45
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=xBrAtz29KXo',
            'title' => 'HOWLING',
            'artist_name' => 'abingdon boys school',
            'anime_official_cite' => 'https://www.d-black.net/1st/',
            'artist_official_cite' => 'https://www.aabbss.com/',
            'image_path' => 'img/howling.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 46
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=2QDQYC9_YL4',
            'title' => 'ツキアカリ',
            'artist_name' => 'Rie fu',
            'anime_official_cite' => 'https://www.d-black.net/1st/',
            'artist_official_cite' => 'https://riefu.com/',
            'image_path' => 'img/tukiakari.jpg',
            'genre_id' => 2,
            'music_tone_id' => 5,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 46
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=xgoLt0l0-eo',
            'title' => 'SHUT UP AND EXPLODE',
            'artist_name' => 'BOOM BOOM SATELLITES',
            'anime_official_cite' => 'https://www.bones.co.jp/work/xamd/',
            'artist_official_cite' => 'https://www.bbs-net.com/',
            'image_path' => 'img/shutupandexplode.jpg',
            'genre_id' => 8,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 47
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=F6fNGh0SZBo',
            'title' => 'VACANCY',
            'artist_name' => 'Kylee',
            'anime_official_cite' => 'https://www.bones.co.jp/work/xamd/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/kylee/',
            'image_path' => 'img/vacancy.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 47
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=h2SK_LMdkak',
            'title' => 'battlecry',
            'artist_name' => 'Shing02',
            'anime_official_cite' => 'https://www.jvcmusic.co.jp/m-serve/tv/samuraichamploo/',
            'artist_official_cite' => 'https://www.e22.com/shing02/',
            'image_path' => 'img/battlecry.jpg',
            'genre_id' => 9,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 48
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=9wuSG9Q4XTY',
            'title' => '四季ノ唄',
            'artist_name' => 'MINMI',
            'anime_official_cite' => 'https://www.jvcmusic.co.jp/m-serve/tv/samuraichamploo/',
            'artist_official_cite' => 'https://minmi.jp/',
            'image_path' => 'img/sikinouta.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 48
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=I2ykU0wTci4',
            'title' => 'さぁ',
            'artist_name' => 'SURFACE',
            'anime_official_cite' => 'https://www.toei-anim.co.jp/tv/getten/index2.html',
            'artist_official_cite' => 'http://www.surface.net/',
            'image_path' => 'img/saa.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 49
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=sA0lbCoSCOQ',
            'title' => 'I JUST FEEL SO LOVE AGAIN ～そばにいるだけで～',
            'artist_name' => 'sweet velvet',
            'anime_official_cite' => 'https://www.toei-anim.co.jp/tv/getten/index2.html',
            'artist_official_cite' => '',
            'image_path' => 'img/ijustfeelso.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 49
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=t8c0oh2XoF4',
            'title' => 'FOR REAL',
            'artist_name' => '徳山 秀典',
            'anime_official_cite' => 'https://www.tv-asahi.co.jp/ch/sphone/anime/0384/',
            'artist_official_cite' => 'https://twitter.com/tokuyama0130',
            'image_path' => 'img/forreal.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 50
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Sh_KlIVDAF4',
            'title' => 'Tightrope',
            'artist_name' => 'CHARCOAL FILTER',
            'anime_official_cite' => 'https://www.tv-asahi.co.jp/ch/sphone/anime/0384/',
            'artist_official_cite' => 'https://powerpop.co.jp/artist/cf/',
            'image_path' => 'img/tightrope.jpg',
            'genre_id' => 1,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 50
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ZImq3BIaXGs',
            'title' => 'Wild Rock',
            'artist_name' => 'BUZZLIP',
            'anime_official_cite' => '',
            'artist_official_cite' => 'https://powerpop.co.jp/artist/cf/',
            'image_path' => 'img/wild rock.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 51
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=C9rcPPjwom4',
            'title' => 'ID',
            'artist_name' => 'flow-war',
            'anime_official_cite' => 'https://pierrot.jp/archive/2000/tv00_16.html',
            'artist_official_cite' => 'https://musing.jp/artist/flow_war/',
            'image_path' => 'img/id.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 51
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=zWJWXnvdSXg',
            'title' => '吹きすさぶ風の中で',
            'artist_name' => 'WAG',
            'anime_official_cite' => 'https://pierrot.jp/archive/2000/tv00_16.html',
            'artist_official_cite' => 'https://musing.jp/artist/flow_war/',
            'image_path' => 'img/hukisusabukazenonakade.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 51
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=gO7e0fDWRos',
            'title' => 'City Hunter ～愛よ消えないで～',
            'artist_name' => '小比類巻 かほる',
            'anime_official_cite' => 'https://www.sunrise-inc.co.jp/work/detail.php?cid=80',
            'artist_official_cite' => 'https://www.kohhy.co.jp/',
            'image_path' => 'img/aiyokienaide.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 52
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=NHKq8IOXPxA',
            'title' => 'Get Wild',
            'artist_name' => 'TM NETWORK',
            'anime_official_cite' => 'https://www.sunrise-inc.co.jp/work/detail.php?cid=80',
            'artist_official_cite' => 'https://avex.jp/tm/',
            'image_path' => 'img/get wild.jpg',
            'genre_id' => 7,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 52
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=zfYKnpLr0ro',
            'title' => 'Rise',
            'artist_name' => 'Origa',
            'anime_official_cite' => 'https://www.production-ig.co.jp/works/ghost-in-the-shell-sac/index.html',
            'artist_official_cite' => 'http://www.r-s.co.jp/origa/',
            'image_path' => 'img/rise.jpg',
            'genre_id' => 10,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 53
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=vtAo1iFZuNc',
            'title' => 'GET9',
            'artist_name' => 'jillmax',
            'anime_official_cite' => 'https://www.production-ig.co.jp/works/ghost-in-the-shell-sac/index.html',
            'artist_official_cite' => 'https://tower.jp/artist/772717/jillmax',
            'image_path' => 'img/get9.jpg',
            'genre_id' => 10,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 53
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=cSuzd5Bd7j8',
            'title' => 'Lithium Flower',
            'artist_name' => 'Scott Matthew',
            'anime_official_cite' => 'https://www.production-ig.co.jp/works/ghost-in-the-shell-sac/index.html',
            'artist_official_cite' => 'https://scottmatthewmusic.com/',
            'image_path' => 'img/get9.jpg',
            'genre_id' => 10,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 53
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=cSuzd5Bd7j8',
            'title' => 'i do',
            'artist_name' => 'Ilaria Graziano',
            'anime_official_cite' => 'https://www.production-ig.co.jp/works/ghost-in-the-shell-sac/index.html',
            'artist_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/-/Artist/A017637.html',
            'image_path' => 'img/rise.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 53
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?app=desktop&v=7bT1IgtsCsQ&rl=yes&hl=ja&gl=JP&warned=True&client=mv-google',
            'title' => 'Girls On Film',
            'artist_name' => 'Duran Duran',
            'anime_official_cite' => 'http://www.gonzo.co.jp/archives/speed-grapher/top.html',
            'artist_official_cite' => 'https://wmg.jp/duran-duran/',
            'image_path' => 'img/girlsonfilm.jpg',
            'genre_id' => 10,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 54
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?app=desktop&v=7bT1IgtsCsQ&rl=yes&hl=ja&gl=JP&warned=True&client=mv-google',
            'title' => 'ひなげしの丘',
            'artist_name' => '湯川 潮音',
            'anime_official_cite' => 'http://www.gonzo.co.jp/archives/speed-grapher/top.html',
            'artist_official_cite' => 'https://yukawa-shione.tumblr.com/',
            'image_path' => 'img/hinagesinooka.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 54
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=UmnQ2fEoXUI',
            'title' => 'only my railgun',
            'artist_name' => 'fripSide',
            'anime_official_cite' => 'https://toaru-project.com/railgun/',
            'artist_official_cite' => 'https://nbcuni-music.com/fripside/',
            'image_path' => 'img/onlymyrailgun.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 55
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=NxKs4n-lUoc',
            'title' => 'Dear My Friend',
            'artist_name' => 'ELISA',
            'anime_official_cite' => 'https://toaru-project.com/railgun/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/ELISA/',
            'image_path' => 'img/dearmyfriend.jpg',
            'genre_id' => 2,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 55
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=eIWmoKBh7iI',
            'title' => 'メリッサ',
            'artist_name' => 'ポルノグラフィティ',
            'anime_official_cite' => 'https://www.hagaren.jp/',
            'artist_official_cite' => 'https://www.pornograffitti.jp/',
            'image_path' => 'img/merissa.jpg',
            'genre_id' => 7,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 56
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=G4--RPSPnWU',
            'title' => '消せない罪',
            'artist_name' => '北出菜奈',
            'anime_official_cite' => 'https://www.hagaren.jp/',
            'artist_official_cite' => 'https://www.nanakitade.jp/',
            'image_path' => 'img/kesenaitumi.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 56
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=cr8magEp0Ho',
            'title' => 'リライト',
            'artist_name' => 'ASIAN KUNG-FU GENERATION',
            'anime_official_cite' => 'https://www.hagaren.jp/',
            'artist_official_cite' => 'https://www.asiankung-fu.com/s/n80/?ima=2421',
            'image_path' => 'img/riraito.jpg',
            'genre_id' => 1,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 56
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=aaI6nVnqQWk',
            'title' => 'I Will',
            'artist_name' => 'Sowelu',
            'anime_official_cite' => 'https://www.hagaren.jp/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/Sowelu/',
            'image_path' => 'img/iwill.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 56
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=aaI6nVnqQWk',
            'title' => 'ゴールデンタイムラバー',
            'artist_name' => 'スキマスイッチ',
            'anime_official_cite' => 'https://www.hagaren.jp/fa/',
            'artist_official_cite' => 'https://www.office-augusta.com/sukimaswitch/',
            'image_path' => 'img/go-rudenntaimuraba-.jpg',
            'genre_id' => 10,
            'music_tone_id' => 13,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 57
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=aaI6nVnqQWk',
            'title' => 'つないだ手',
            'artist_name' => 'Lil\'B',
            'anime_official_cite' => 'https://www.hagaren.jp/fa/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/lilB/profile/',
            'image_path' => 'img/tunaidate.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 57
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=E39U6rbDuek',
            'title' => '＊～アスタリスク～',
            'artist_name' => 'ORANGE RANGE',
            'anime_official_cite' => 'https://pierrot.jp/title/bleach/',
            'artist_official_cite' => 'https://orangerange.com/',
            'image_path' => 'img/asutarisuku.jpg',
            'genre_id' => 4,
            'music_tone_id' => 13,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 58
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=OEPEuLuyyYo',
            'title' => 'Life Is Like a Boat',
            'artist_name' => 'Rie fu',
            'anime_official_cite' => 'https://pierrot.jp/title/bleach/',
            'artist_official_cite' => 'https://riefu.com/',
            'image_path' => 'img/lifeislikeaboat.jpg',
            'genre_id' => 5,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 58
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=6Iw_rpR43nw',
            'title' => '乱舞のメロディ',
            'artist_name' => 'シド',
            'anime_official_cite' => 'https://pierrot.jp/title/bleach/',
            'artist_official_cite' => 'https://sid-web.info/',
            'image_path' => 'img/rannbunomerodeli.jpg',
            'genre_id' => 10,
            'music_tone_id' => 13,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 58
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=bvZ8TzHnCrE',
            'title' => '種をまく日々',
            'artist_name' => '中孝介',
            'anime_official_cite' => 'https://pierrot.jp/title/bleach/',
            'artist_official_cite' => 'https://.com/',
            'image_path' => 'img/tanewomakuhibi.jpg',
            'genre_id' => 5,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 58
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=TbResk1x4kY',
            'title' => 'ホログラム',
            'artist_name' => 'NICO Touches the Walls',
            'anime_official_cite' => 'https://www.hagaren.jp/fa/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/nicotouchesthewalls/',
            'image_path' => 'img/horoguramu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 57
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=OJAbEWDTmBs',
            'title' => 'LET IT OUT',
            'artist_name' => '福原美穂',
            'anime_official_cite' => 'https://www.hagaren.jp/fa/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/nicotouchesthewalls/',
            'image_path' => 'img/letitout.jpg',
            'genre_id' => 7,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 57
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Avv-mz3W6e8',
            'title' => 'Crowds',
            'artist_name' => 'WHITE ASH',
            'anime_official_cite' => 'https://www.ntv.co.jp/GATCHAMAN_Crowds/',
            'artist_official_cite' => 'https://twitter.com/white_ash_band',
            'image_path' => 'img/crowds.jpeg',
            'genre_id' => 5,
            'music_tone_id' => 13,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 59
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=hQEGa4q94vo',
            'title' => 'INNOCENT NOTE',
            'artist_name' => '一ノ瀬はじめ (CV:内田真礼)',
            'anime_official_cite' => 'https://www.ntv.co.jp/GATCHAMAN_Crowds/',
            'artist_official_cite' => 'http://uchidamaaya.jp/',
            'image_path' => 'img/innocentnote.jpg',
            'genre_id' => 3,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 59
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=sR1pJuxB-0w',
            'title' => '裏切りの夕焼け',
            'artist_name' => 'THEATRE BROOK',
            'anime_official_cite' => 'https://www.durarara.com/1st/',
            'artist_official_cite' => 'http://www.theatrebrook.com/',
            'image_path' => 'img/uragirinoyuuyake.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 60
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=XqNjoSARg8I',
            'title' => 'Trust Me',
            'artist_name' => '松下優也',
            'anime_official_cite' => 'https://www.durarara.com/1st/',
            'artist_official_cite' => 'https://yuyamatsushita.com/',
            'image_path' => 'img/trustme.jpg',
            'genre_id' => 5,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 60
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=nIm2s7t97NI',
            'title' => 'Flyers',
            'artist_name' => 'BRADIO',
            'anime_official_cite' => 'https://www.vap.co.jp/deathparade/',
            'artist_official_cite' => 'https://bradio.jp/',
            'image_path' => 'img/flyers.jpg',
            'genre_id' => 10,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 61
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=asM87MlnnVg',
            'title' => 'Last Theater',
            'artist_name' => 'NoisyCell',
            'anime_official_cite' => 'https://www.vap.co.jp/deathparade/',
            'artist_official_cite' => 'https://www.vap.co.jp/noisycell/',
            'image_path' => 'img/lasttheater.jpg',
            'genre_id' => 10,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 61
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=wmlIojFXmtY',
            'title' => '君じゃなきゃダメみたい',
            'artist_name' => '大石昌良',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/nozakikun/index2.html',
            'artist_official_cite' => 'https://www.014014.jp/',
            'image_path' => 'img/kimijanakyadamemitai.jpg',
            'genre_id' => 10,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 62
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=3bkSJl28Zgc',
            'title' => 'ウラオモテ・フォーチュン',
            'artist_name' => '佐倉千代 (CV.小澤亜李)',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/nozakikun/index2.html',
            'artist_official_cite' => 'https://www.imenterprise.jp/profile.php?id=31',
            'image_path' => 'img/uraomotefo-tyunn.jpg',
            'genre_id' => 3,
            'music_tone_id' => 3,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 62
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=BW4H15rK6iI',
            'title' => 'ジョジョ ～その血の運命～',
            'artist_name' => '富永TOMMY弘明',
            'anime_official_cite' => 'https://jojo-portal.com/anime/pb-bt/',
            'artist_official_cite' => 'https://avex.jp/tommy/index.html',
            'image_path' => 'img/jojo.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 63
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=G65pvuTFR_A',
            'title' => 'ROUNDABOUT',
            'artist_name' => 'Yes',
            'anime_official_cite' => 'https://jojo-portal.com/anime/pb-bt/',
            'artist_official_cite' => 'https://www.livenation.co.jp/artist-yes-40059',
            'image_path' => 'img/roundabout.jpg',
            'genre_id' => 10,
            'music_tone_id' => 13,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 63
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=73O7tATQ8og',
            'title' => 'もってけ！セーラーふく',
            'artist_name' => '泉こなた( CV.平野綾), 柊かがみ( CV.加藤英美里), 柊つかさ( CV.福原香織), 高良みゆき( CV.遠藤綾)',
            'anime_official_cite' => 'http://www.lucky-ch.com/',
            'artist_official_cite' => '',
            'image_path' => 'img/mottekese-ra-huku.jpg',
            'genre_id' => 3,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 64
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=yRdXWqa5Vjc',
            'title' => '宇宙鉄人キョーダイン',
            'artist_name' => '泉こなた( CV.平野綾)',
            'anime_official_cite' => 'http://www.lucky-ch.com/',
            'artist_official_cite' => 'https://grick.jp/artist/hirano.php',
            'image_path' => 'img/utyuutetujinnkyo-dainn.jpeg',
            'genre_id' => 3,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 64
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=yRdXWqa5Vjc',
            'title' => 'unravel',
            'artist_name' => 'TK from 凛として時雨',
            'anime_official_cite' => 'https://www.marv.jp/special/tokyoghoul/first/index.html',
            'artist_official_cite' => 'https://tkofficial.jp/s/n150/?ima=1145',
            'image_path' => 'img/unravel.jpg',
            'genre_id' => 10,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 65
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=426yinffNdU',
            'title' => '聖者たち',
            'artist_name' => 'People In The Box',
            'anime_official_cite' => 'https://www.marv.jp/special/tokyoghoul/first/index.html',
            'artist_official_cite' => 'https://peopleinthebox.com/',
            'image_path' => 'img/seijatati.jpg',
            'genre_id' => 10,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 65
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=_phSgZZOQJA',
            'title' => 'Out of Control',
            'artist_name' => 'Nothing\'s Carved In Stone',
            'anime_official_cite' => 'https://www.production-ig.co.jp/works/psycho-pass',
            'artist_official_cite' => 'https://www.ncis.jp/',
            'image_path' => 'img/outofcontrol.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 66
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=qiX5DI--8bg',
            'title' => '名前のない怪物',
            'artist_name' => 'EGOIST',
            'anime_official_cite' => 'https://www.production-ig.co.jp/works/psycho-pass',
            'artist_official_cite' => 'https://www.egoist-inori.jp/',
            'image_path' => 'img/namaenonaikaibutu.jpg',
            'genre_id' => 10,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 66
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=kYW1wrYOxy8',
            'title' => 'EXiSTENCE',
            'artist_name' => 'SiM',
            'anime_official_cite' => 'http://shingekinobahamut-genesis.jp/',
            'artist_official_cite' => 'http://sxixm.com/',
            'image_path' => 'img/existence.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 67
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=v7iasYr61_s',
            'title' => 'Promised Land',
            'artist_name' => '清水理沙',
            'anime_official_cite' => 'http://shingekinobahamut-genesis.jp/',
            'artist_official_cite' => 'https://aksent.co.jp/profile/shimizu_risa/',
            'image_path' => 'img/promisedland.webp',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 67
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=kjHsIeJi_pM',
            'title' => 'resonance',
            'artist_name' => 'T.M.Revolution',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/contents/souleater/index.html',
            'artist_official_cite' => 'https://www.tm-revolution.com/',
            'image_path' => 'img/resonance.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 68
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=4tiCP9GggEE',
            'title' => 'アイワナビー',
            'artist_name' => 'STANCE PUNKS',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/contents/souleater/index.html',
            'artist_official_cite' => 'http://stancepunks.com/',
            'image_path' => 'img/aiwanabi-.jpg',
            'genre_id' => 1,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 68
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=oBDY9tNu5lY',
            'title' => 'マトリョーシカ',
            'artist_name' => 'NICO Touchesthe Walls',
            'anime_official_cite' => 'https://noitamina-control.jp/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/nicotouchesthewalls/',
            'image_path' => 'img/matoryo-sika.jpg',
            'genre_id' => 10,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 69
        ]);
        
        Music::create([
            'youtube' => 'https://www.nicovideo.jp/watch/sm21836507',
            'title' => 'RPG',
            'artist_name' => 'school food punishment',
            'anime_official_cite' => 'https://noitamina-control.jp/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/schoolfoodpunishment/',
            'image_path' => 'img/rpg.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 69
        ]);
        
        Music::create([
            'youtube' => 'https://www.nicovideo.jp/watch/sm2475711',
            'title' => 'Breakin\' through',
            'artist_name' => '喜多　修平',
            'anime_official_cite' => 'https://www.persona-ts.net/',
            'artist_official_cite' => 'http://kitashuhei.com/',
            'image_path' => 'img/breakin\'through.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 70
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=3nKFIl-SWAc',
            'title' => 'SUICIDES LOVE STORY',
            'artist_name' => '北出菜奈',
            'anime_official_cite' => 'https://www.persona-ts.net/',
            'artist_official_cite' => 'https://www.nanakitade.jp/',
            'image_path' => 'img/suicideslovestory.jpeg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 70
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=qJ0b2qNTb4g',
            'title' => 'Falling Down',
            'artist_name' => 'oasis',
            'anime_official_cite' => 'https://www.production-ig.co.jp/works/juiz/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/Oasis/',
            'image_path' => 'img/fallingdown.jpg',
            'genre_id' => 10,
            'music_tone_id' => 13,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 71
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=SR7Y6H7DqKM',
            'title' => 'futuristic imagination',
            'artist_name' => 'school food punishment',
            'anime_official_cite' => 'https://www.production-ig.co.jp/works/juiz/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/schoolfoodpunishment/',
            'image_path' => 'img/futuristicimagination.jpg',
            'genre_id' => 10,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 71
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=rTxGuyL3NsM',
            'title' => 'Loosey',
            'artist_name' => 'THE STRiPES',
            'anime_official_cite' => 'http://www.gonzo.co.jp/archives/bakuten/',
            'artist_official_cite' => 'https://recochoku.jp/artist/2000002538/',
            'image_path' => 'img/loosey.jpg',
            'genre_id' => 10,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 72
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=5ZBFYZwc498',
            'title' => 'Under the Sky',
            'artist_name' => 'Cloudica',
            'anime_official_cite' => 'http://www.gonzo.co.jp/archives/bakuten/',
            'artist_official_cite' => 'https://www.jvcmusic.co.jp/-/Artist/A018762.html',
            'image_path' => 'img/underthesky.jpg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 72
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=thVzGk4Jhjc',
            'title' => 'ロゴスなきワールド',
            'artist_name' => '石井妥師',
            'anime_official_cite' => 'http://www.gonzo.co.jp/archives/bakuten/',
            'artist_official_cite' => 'http://yasushi-ishii.com/',
            'image_path' => 'img/rogosunakiwa-rudo.jpg',
            'genre_id' => 6,
            'music_tone_id' => 10,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 73
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=XzIAqtnd-v8',
            'title' => 'Shine',
            'artist_name' => 'MR. BIG',
            'anime_official_cite' => 'http://www.gonzo.co.jp/archives/bakuten/',
            'artist_official_cite' => 'http://www.mrbigsite.com/',
            'image_path' => 'img/shine.jpg',
            'genre_id' => 7,
            'music_tone_id' => 11,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 73
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ipBCtl0j4O8',
            'title' => 'Hero’s Come Back!!',
            'artist_name' => 'nobodyknows+',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/naruto/index2.html',
            'artist_official_cite' => 'https://nobodyknows-fc.com/',
            'image_path' => 'img/hero\'scomeback.jpg',
            'genre_id' => 9,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 74
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=8GWMnu2keRM',
            'title' => '流れ星～Shooting Star～',
            'artist_name' => 'HOME MADE 家族',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/naruto/index2.html',
            'artist_official_cite' => 'https://www.home-made.jp/',
            'image_path' => 'img/nagarebosi.jpg',
            'genre_id' => 7,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 74
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=n5TG3Fxzft0',
            'title' => '曇天',
            'artist_name' => 'DOES',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/gintama/',
            'artist_official_cite' => 'http://www.does-net.com/',
            'image_path' => 'img/donten.jpg',
            'genre_id' => 10,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 75
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=kBQmuw3CYnE',
            'title' => '修羅',
            'artist_name' => 'DOES',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/gintama/',
            'artist_official_cite' => 'http://www.does-net.com/',
            'image_path' => 'img/syura.jpg',
            'genre_id' => 10,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 75
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=C7-DM_c-2Hc',
            'title' => 'The Biggest Dreamer',
            'artist_name' => '和田光司',
            'anime_official_cite' => 'https://www.toei-anim.co.jp/tv/digimon_t/',
            'artist_official_cite' => 'http://wadakoji.com/',
            'image_path' => 'img/thebiggestdreamer.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 76
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=C7-DM_c-2Hc',
            'title' => 'My Tomorrow',
            'artist_name' => 'AiM',
            'anime_official_cite' => 'https://www.toei-anim.co.jp/tv/digimon_t/',
            'artist_official_cite' => 'https://mora.jp/artist/141751/',
            'image_path' => 'img/mytomorrow.jpg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 76
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=dMGFcDByan4',
            'title' => '夜は眠れるかい？',
            'artist_name' => 'flumpool',
            'anime_official_cite' => 'http://www.ajin.net/',
            'artist_official_cite' => 'https://www.flumpool.jp/',
            'image_path' => 'img/yoruhanemurerukai.jpg',
            'genre_id' => 10,
            'music_tone_id' => 13,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 77
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=fB_1fJlc1k4',
            'title' => 'HOW CLOSE YOU ARE',
            'artist_name' => '宮野真守',
            'anime_official_cite' => 'http://www.ajin.net/',
            'artist_official_cite' => 'https://www.miyanomamoru.com/',
            'image_path' => 'img/howcloseyouare.jpg',
            'genre_id' => 2,
            'music_tone_id' => 8,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 77
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=iKjFfKBg05c',
            'title' => '紅蓮の弓矢',
            'artist_name' => 'Linked Horizon',
            'anime_official_cite' => 'http://shingeki.tv/season1/',
            'artist_official_cite' => 'https://linked-horizon.com/',
            'image_path' => 'img/gurennnoyumiya.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 78
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=kgZRAyVMcB8',
            'title' => '美しき残酷な世界',
            'artist_name' => '日笠陽子',
            'anime_official_cite' => 'http://shingeki.tv/season1/',
            'artist_official_cite' => 'https://linked-horizon.com/',
            'image_path' => 'img/utukusikizannkokunasekai.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 78
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=cZKoSon0x68',
            'title' => '真赤な誓い',
            'artist_name' => '福山芳樹',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/busourenkin/',
            'artist_official_cite' => 'http://www.fukuyama-yoshiki.net/',
            'image_path' => 'img/makkanatikai.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 79
        ]);
        
        Music::create([
            'youtube' => 'https://www.nicovideo.jp/watch/sm4698647',
            'title' => 'ホシアカリ',
            'artist_name' => '樹海',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/busourenkin/',
            'artist_official_cite' => 'https://music.tower.jp/artist/detail/2000007743',
            'image_path' => 'img/hosiakari.jpeg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 79
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=5BknsZZ2dKI',
            'title' => 'DYNAMITE EXPLOSION',
            'artist_name' => 'Fire Bomber',
            'anime_official_cite' => 'https://macross.jp/series-detail/macross7/',
            'artist_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/-/Artist/A007893.html',
            'image_path' => 'img/dynamiteexplosion.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 80
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=WsYc5Y7AfC8',
            'title' => 'PARADE',
            'artist_name' => 'Fire Bomber',
            'anime_official_cite' => 'https://macross.jp/series-detail/macross7/',
            'artist_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/-/Artist/A007893.html',
            'image_path' => 'img/parade.jpg',
            'genre_id' => 10,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 80
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=nLuoz1Txg70',
            'title' => 'Genesis',
            'artist_name' => 'STEREO DIVE FOUNDATION',
            'anime_official_cite' => 'https://dimension-w.net/',
            'artist_official_cite' => 'https://www.lantis.jp/artist/stereodivefoundation/',
            'image_path' => 'img/genesis.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 81
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Gr0tFEKY_3E',
            'title' => 'Contrast',
            'artist_name' => 'Fo’xTails',
            'anime_official_cite' => 'https://dimension-w.net/',
            'artist_official_cite' => 'https://www.lantis.jp/artist/foxtails/',
            'image_path' => 'img/contrast.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 81
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=vwkhNj4ZwfM',
            'title' => 'BLOODY STREAM',
            'artist_name' => 'Coda',
            'anime_official_cite' => 'https://jojo-animation.com/fb_bt/',
            'artist_official_cite' => 'https://mora.jp/package/43000033/A82392/',
            'image_path' => 'img/bloodystream.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 82
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=byPv2guwey8',
            'title' => 'Raise your flag',
            'artist_name' => 'MAN WITH A MISSION',
            'anime_official_cite' => 'http://g-tekketsu.com/',
            'artist_official_cite' => 'https://www.mwamjapan.info/',
            'image_path' => 'img/raseyourflag.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 83
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=_pyfH3oj_eg',
            'title' => 'オルフェンズの涙',
            'artist_name' => 'MISIA',
            'anime_official_cite' => 'http://g-tekketsu.com/',
            'artist_official_cite' => 'https://www.misia.jp/',
            'image_path' => 'img/orufenzunonamida.jpg',
            'genre_id' => 7,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 83
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=WLWD-DcP0ko',
            'title' => 'ワンミーツハー',
            'artist_name' => 'ヒトリエ',
            'anime_official_cite' => 'https://www.marv.jp/special/divinegate/',
            'artist_official_cite' => 'https://www.hitorie.jp/',
            'image_path' => 'img/wannmi-tuha-.jpg',
            'genre_id' => 10,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 84
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=F48wY1RH0Mg',
            'title' => 'CONTRAST',
            'artist_name' => 'vistlip',
            'anime_official_cite' => 'https://www.marv.jp/special/divinegate/',
            'artist_official_cite' => 'https://www.vistlip.com/',
            'image_path' => 'img/contrast2.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 84
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ns1VNnbbF9E',
            'title' => 'LΛST RESOLUTION',
            'artist_name' => 'Emblem of THEUNLIMITED',
            'anime_official_cite' => 'https://www.at-x.com/program/detail/4354',
            'artist_official_cite' => 'https://tower.jp/artist/2123129/Emblem-of-THE-UNLIMITED',
            'image_path' => 'img/lastresolution.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 85
        ]);
        
        Music::create([
            'youtube' => 'https://www.nicovideo.jp/watch/sm29484895',
            'title' => 'OUTLAWS',
            'artist_name' => 'eyelis',
            'anime_official_cite' => 'https://www.at-x.com/program/detail/4354',
            'artist_official_cite' => 'https://whv-amusic.com/eyelis/',
            'image_path' => 'img/outlaws.jpeg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 85
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=rVkT5SOfsBU',
            'title' => 'IN MY WORLD',
            'artist_name' => 'ROOKiEZ is PUNK\'D',
            'anime_official_cite' => 'https://www.ao-ex.com/tv/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/rookiez/',
            'image_path' => 'img/inmyworld.jpeg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 1
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=gBo9DYLnAmM',
            'title' => 'Wired Life',
            'artist_name' => '黒木メイサ',
            'anime_official_cite' => 'https://www.ao-ex.com/tv/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/rookiez/',
            'image_path' => 'img/wiredlife.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 1
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=gErh5d3gpVk',
            'title' => 'Colors of the Heart',
            'artist_name' => 'UVERworld',
            'anime_official_cite' => 'https://www.aniplex.co.jp/blood-plus/',
            'artist_official_cite' => 'https://www.uverworld.jp/',
            'image_path' => 'img/colorsoftheheart.jpg',
            'genre_id' => 10,
            'music_tone_id' => 5,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 86
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Xhkvge0rrss',
            'title' => 'This Love',
            'artist_name' => 'アンジェラ・アキ',
            'anime_official_cite' => 'https://www.aniplex.co.jp/blood-plus/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/AngelaAki/',
            'image_path' => 'img/thislove.jpg',
            'genre_id' => 2,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 86
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=F6V2I-FSuvA',
            'title' => 'INNOCENT SORROW',
            'artist_name' => 'abingdon boys school',
            'anime_official_cite' => 'https://www.tms-e.co.jp/alltitles/2000s/622101.html',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/AngelaAki/',
            'image_path' => 'img/innocentsorrow.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 87
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=OHb0xIoG940',
            'title' => 'SNOW KISS',
            'artist_name' => 'NIRGILIS',
            'anime_official_cite' => 'https://www.tms-e.co.jp/alltitles/2000s/622101.html',
            'artist_official_cite' => 'https://nirgilis.net/profile',
            'image_path' => 'img/snowkiss.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 87
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Sjl4x1HpPJE',
            'title' => 'Let Me Hear',
            'artist_name' => 'Fear, and Loathing in Las Vegas',
            'anime_official_cite' => 'https://www.vap.co.jp/kiseiju/',
            'artist_official_cite' => 'http://www.lasvegas-jp.com/',
            'image_path' => 'img/letmehear.jpg',
            'genre_id' => 10,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 88
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=1UdJQfO6Fbs',
            'title' => 'IT’S THE RIGHT TIME',
            'artist_name' => '三浦大知',
            'anime_official_cite' => 'https://www.vap.co.jp/kiseiju/',
            'artist_official_cite' => 'https://avex.jp/daichi/',
            'image_path' => 'img/it\'stherighttime.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 88
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=H7cykKMpp_I',
            'title' => 'COLORS',
            'artist_name' => 'FLOW',
            'anime_official_cite' => 'https://geass.jp/first/',
            'artist_official_cite' => 'https://www.flow-official.jp/',
            'image_path' => 'img/colors.jpg',
            'genre_id' => 4,
            'music_tone_id' => 4,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 89
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=b2SxY0zYNRM',
            'title' => '勇侠青春謳',
            'artist_name' => 'ALI PROJECT',
            'anime_official_cite' => 'https://geass.jp/first/',
            'artist_official_cite' => 'https://aliproject.jp/',
            'image_path' => 'img/seisyun.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 89
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=9ENe0FsMvqo',
            'title' => 'ペガサス幻想',
            'artist_name' => 'MAKE UP',
            'anime_official_cite' => 'https://www.saintseiya-anime.com/ja/index-top.php',
            'artist_official_cite' => 'https://columbia.jp/artist-info/make-up/discography/COCP-37591-2.html',
            'image_path' => 'img/pegasasu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 90
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=NxJSH7At8eU',
            'title' => '永遠ブルー',
            'artist_name' => 'MAKE UP',
            'anime_official_cite' => 'https://www.saintseiya-anime.com/ja/index-top.php',
            'artist_official_cite' => 'https://columbia.jp/artist-info/make-up/discography/COCP-37591-2.html',
            'image_path' => 'img/pegasasu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 90
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=iQGAPewPH1s',
            'title' => 'ピースサイン',
            'artist_name' => '米津玄師',
            'anime_official_cite' => 'https://heroaca.com/',
            'artist_official_cite' => 'https://reissuerecords.net/',
            'image_path' => 'img/pi-susain.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 91
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=jNjGRYgid8k',
            'title' => 'だから、ひとりじゃない',
            'artist_name' => 'Little Glee Monster',
            'anime_official_cite' => 'https://heroaca.com/',
            'artist_official_cite' => 'https://www.littlegleemonster.com/',
            'image_path' => 'img/dakarahitorijanai.jpg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 91
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Q8llzxR8DhU',
            'title' => 'Respect for the dead man',
            'artist_name' => 'Pay money To my Pain',
            'anime_official_cite' => 'https://www.vap.co.jp/nobunagun/',
            'artist_official_cite' => 'http://www.paymoneytomypain.com/',
            'image_path' => 'img/respectforthedeadman.jpg',
            'genre_id' => 10,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 92
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Q8llzxR8DhU',
            'title' => 'ちいさな星ver.α',
            'artist_name' => '小椋しお（武藤志織）、ニュートン（浅川悠）、ガリレオ（上坂すみれ)',
            'anime_official_cite' => 'https://www.vap.co.jp/nobunagun/',
            'artist_official_cite' => 'http://www.paymoneytomypain.com/',
            'image_path' => 'img/tiisanahosi.jpg',
            'genre_id' => 3,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 92
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=d2Kj7YybM5o',
            'title' => 'database feat.TAKUMA(10-FEET)',
            'artist_name' => 'MAN WITH A MISSION',
            'anime_official_cite' => 'https://www6.nhk.or.jp/anime/program/detail.html?i=loghorizon',
            'artist_official_cite' => 'https://www.mwamjapan.info/',
            'image_path' => 'img/database.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 93
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=fNfboNEFh-g',
            'title' => 'Your song*',
            'artist_name' => 'Yun*chi',
            'anime_official_cite' => 'https://www6.nhk.or.jp/anime/program/detail.html?i=loghorizon',
            'artist_official_cite' => 'https://yunchi.asobisystem.com/',
            'image_path' => 'img/yoursong.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 93
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=L6yzHuBLFIQ',
            'title' => '混ぜるな危険',
            'artist_name' => '筋肉少女帯',
            'anime_official_cite' => 'https://twitter.com/ushitora_tv',
            'artist_official_cite' => 'https://king-show.net/',
            'image_path' => 'img/mazerunakiken.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 94
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=jTupjSfkHts',
            'title' => 'HERO',
            'artist_name' => 'Sonar Pocket',
            'anime_official_cite' => 'https://twitter.com/ushitora_tv',
            'artist_official_cite' => 'http://www.sonapoke.jp/',
            'image_path' => 'img/hero.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 94
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=2snm79cxw_8',
            'title' => 'STRIKE BACK',
            'artist_name' => 'BACK-ON',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/fairytail/',
            'artist_official_cite' => 'https://www.back-on.com/',
            'image_path' => 'img/strike back.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 95
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ka0qmS7dHk4',
            'title' => '心の鍵',
            'artist_name' => 'May J.',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/fairytail/',
            'artist_official_cite' => 'https://www.may-j.com/index.php',
            'image_path' => 'img/kokoronokagi.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 95
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=8UjfSGspmIk',
            'title' => '青い花',
            'artist_name' => 'カラーボトル',
            'anime_official_cite' => 'https://tatsunoko.co.jp/works/casshern-sins',
            'artist_official_cite' => 'https://twitter.com/color_bottle',
            'image_path' => 'img/aoihana.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 96
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=O2mB1ycN8Xc',
            'title' => 'reason',
            'artist_name' => 'ＫΛＮΛ',
            'anime_official_cite' => 'https://tatsunoko.co.jp/works/casshern-sins',
            'artist_official_cite' => 'https://tower.jp/artist/486398/K%CE%9BN%CE%9B',
            'image_path' => 'img/reason.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 96
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Pq2L2MTD3dk',
            'title' => 'Stray',
            'artist_name' => 'Steve Conte',
            'anime_official_cite' => 'https://www.bones.co.jp/work/wolfs-rain/',
            'artist_official_cite' => 'https://tower.jp/artist/1418242/Steve-Conte',
            'image_path' => 'img/stray.jpg',
            'genre_id' => 2,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 97
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=uRluqu6yFe4',
            'title' => 'アフターダーク',
            'artist_name' => 'ASIAN KUNG-FU GENERATION',
            'anime_official_cite' => 'https://pierrot.jp/title/bleach/',
            'artist_official_cite' => 'https://www.asiankung-fu.com/s/n80/?ima=3846',
            'image_path' => 'img/afuta-da-ku.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 58
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=VQLjUZ2bm24',
            'title' => 'HANABI',
            'artist_name' => 'いきものがかり',
            'anime_official_cite' => 'https://pierrot.jp/title/bleach/',
            'artist_official_cite' => 'https://ikimonogakari.com/',
            'image_path' => 'img/hanabi.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 58
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=q9M4O-nATJs',
            'title' => 'DIVER#2100',
            'artist_name' => 'R.A.M.',
            'anime_official_cite' => 'https://www.fami-geki.com/vod/anime-webdiver/',
            'artist_official_cite' => '',
            'image_path' => 'img/diver.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 98
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=3jY3Caexkyo',
            'title' => 'TOGETHER',
            'artist_name' => 'KATSUMI',
            'anime_official_cite' => 'https://www.fami-geki.com/vod/anime-webdiver/',
            'artist_official_cite' => 'https://www.katsumi-music.com/',
            'image_path' => 'img/together.jpg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 98
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=2JGl6UzfPkE',
            'title' => 'Driver\'s High',
            'artist_name' => 'L\'Arc〜en〜Ciel',
            'anime_official_cite' => 'https://pierrot.jp/archive/1995/tv90_26.html',
            'artist_official_cite' => 'https://larc-en-ciel.com/index.php',
            'image_path' => 'img/diver\'shigh.jpg',
            'genre_id' => 7,
            'music_tone_id' => 13,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 99
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=VITZt04ELnE',
            'title' => 'Last Piece',
            'artist_name' => 'Kirari',
            'anime_official_cite' => 'https://pierrot.jp/archive/1995/tv90_26.html',
            'artist_official_cite' => 'https://recochoku.jp/artist/2000030972/',
            'image_path' => 'img/lastpiece.jpeg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 99
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=E8IN89A2b4o',
            'title' => 'ヒトリノ夜',
            'artist_name' => 'ポルノグラフィティ',
            'anime_official_cite' => 'https://pierrot.jp/archive/1995/tv90_26.html',
            'artist_official_cite' => 'https://www.pornograffitti.jp/',
            'image_path' => 'img/hitorinoyoru.jpg',
            'genre_id' => 1,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 99
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=fq71mMAi8MQ',
            'title' => 'しずく',
            'artist_name' => '奥田美和子',
            'anime_official_cite' => 'https://pierrot.jp/archive/1995/tv90_26.html',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/okudamiwako/',
            'image_path' => 'img/sizuku.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 99
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=-uDSi-BhfKY',
            'title' => '摩訶不思議アドベンチャー',
            'artist_name' => '高橋洋樹',
            'anime_official_cite' => 'https://dragon-ball-official.com/',
            'artist_official_cite' => 'http://staymusic.co.jp/takahashi_hiroki.html',
            'image_path' => 'img/makahusigiadovenntya-.jpg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 100
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=je83qpCmZB4',
            'title' => 'ロマンティックあげるよ',
            'artist_name' => '橋本潮',
            'anime_official_cite' => 'https://dragon-ball-official.com/',
            'artist_official_cite' => 'http://www.nyankohime.net/',
            'image_path' => 'img/romanntelikkuageruyo.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 100
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=sfKi8PCSL5k',
            'title' => 'CHA-LA HEAD CHA-LA',
            'artist_name' => '影山ヒロノブ',
            'anime_official_cite' => 'https://dragon-ball-official.com/',
            'artist_official_cite' => 'http://airblanca.com/',
            'image_path' => 'img/chala.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 101
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Vi7v-nmn4pE',
            'title' => 'でてこいとびきりZENKAIパワー！',
            'artist_name' => 'Manna',
            'anime_official_cite' => 'https://dragon-ball-official.com/',
            'artist_official_cite' => 'https://tower.jp/artist/180049/MANNA-(%E3%83%9E%E3%83%8A)',
            'image_path' => 'img/chala.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 101
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=R2i9qopjFTY',
            'title' => 'Borderland',
            'artist_name' => '川田まみ',
            'anime_official_cite' => 'https://dragon-ball-official.com/',
            'artist_official_cite' => 'http://nbcuni-music.com/mami_kawada/',
            'image_path' => 'img/borderland.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 102
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=zLiZ2Ax2UUU',
            'title' => 'Ambivalentidea',
            'artist_name' => 'やなぎなぎ',
            'anime_official_cite' => 'https://www.jormungand.tv/',
            'artist_official_cite' => 'https://yanaginagi.net/',
            'image_path' => 'img/ambivalentidea.jpg',
            'genre_id' => 2,
            'music_tone_id' => 8,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 102
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=SRPqswHvUyw',
            'title' => 'killy killy JOKER',
            'artist_name' => '分島花音',
            'anime_official_cite' => 'https://www.at-x.com/program/detail/5380',
            'artist_official_cite' => 'https://whv-amusic.com/wakeshimakanon/',
            'image_path' => 'img/killykillyjoker.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 103
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=OwRqxFdH0p0',
            'title' => 'realize -夢の待つ場所-',
            'artist_name' => 'Cyua',
            'anime_official_cite' => 'https://www.at-x.com/program/detail/5380',
            'artist_official_cite' => 'https://recochoku.jp/artist/2000056760/',
            'image_path' => 'img/realize.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 103
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=5b9JzKhhVZo',
            'title' => 'Obsession',
            'artist_name' => 'See-Saw',
            'anime_official_cite' => 'https://hack.bn-ent.net/',
            'artist_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/-/Artist/A017069.html',
            'image_path' => 'img/obsession.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 104
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=SH0fzaiIAJs',
            'title' => '優しい夜明け',
            'artist_name' => 'See-Saw',
            'anime_official_cite' => 'https://hack.bn-ent.net/',
            'artist_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/-/Artist/A017069.html',
            'image_path' => 'img/obsession.jpg',
            'genre_id' => 2,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 104
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=TR3ma_60-m4',
            'title' => 'Hacking to the Gate',
            'artist_name' => 'いとう かなこ',
            'anime_official_cite' => 'http://steinsgate.tv/index.html',
            'artist_official_cite' => 'https://kanataro.amebaownd.com/',
            'image_path' => 'img/hackingtothegate.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 105
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=E_q9maUnWes',
            'title' => '刻司ル十二ノ盟約',
            'artist_name' => '榊原ゆい',
            'anime_official_cite' => 'http://steinsgate.tv/index.html',
            'artist_official_cite' => 'https://kanataro.amebaownd.com/',
            'image_path' => 'img/tokitukasadoru.jpg',
            'genre_id' => 2,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 105
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ce-1S3zpX3Q',
            'title' => 'HIGHSCHOOL OF THE DEAD',
            'artist_name' => '岸田教団&THE明星ロケッツ',
            'anime_official_cite' => 'https://www.nbcuni.co.jp/rondorobe/anime/hotd/',
            'artist_official_cite' => 'https://kisidakyoudan.jp/',
            'image_path' => 'img/highschoolofthedead.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 106
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=GX8Y-4lpn30',
            'title' => '君と太陽が死んだ日',
            'artist_name' => '黒崎真音',
            'anime_official_cite' => 'https://www.nbcuni.co.jp/rondorobe/anime/hotd/',
            'artist_official_cite' => 'https://nbcuni-music.com/maon/',
            'image_path' => 'img/highschoolofthedead.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 106
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=BLxfEUn6UkI',
            'title' => 'mind as Judgment',
            'artist_name' => '飛蘭',
            'anime_official_cite' => 'https://www.ponican.jp/canaan/',
            'artist_official_cite' => 'http://www.faylan.jp/',
            'image_path' => 'img/mindasjudgment.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 107
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=AO2SF3GkC4g',
            'title' => 'My heaven',
            'artist_name' => 'Annabel',
            'anime_official_cite' => 'https://www.ponican.jp/canaan/',
            'artist_official_cite' => 'https://annabel.jp/',
            'image_path' => 'img/myheaven.jpg',
            'genre_id' => 2,
            'music_tone_id' => 8,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 107
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=nPnI43ZaYJo',
            'title' => 'シドニア',
            'artist_name' => 'angela',
            'anime_official_cite' => 'https://www6.nhk.or.jp/anime/program/detail.html?i=sidonia',
            'artist_official_cite' => 'https://angela-official.com/',
            'image_path' => 'img/sidonia.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 108
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=xLKG8oXwhS4',
            'title' => '掌 -show-',
            'artist_name' => '喜多村英梨',
            'anime_official_cite' => 'https://www6.nhk.or.jp/anime/program/detail.html?i=sidonia',
            'artist_official_cite' => 'https://erikitamura.com/',
            'image_path' => 'img/kobusi.jpg',
            'genre_id' => 1,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 108
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=wrkC0FQiwiY',
            'title' => '甲賀忍法帖',
            'artist_name' => '陰陽座',
            'anime_official_cite' => 'http://www.gonzo.co.jp/archives/basilisk/',
            'artist_official_cite' => 'https://www.onmyo-za.net/',
            'image_path' => 'img/kouganinnpoutyou.jpeg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 109
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=LRjGQNj8jWY',
            'title' => 'ヒメムラサキ',
            'artist_name' => '水樹奈々',
            'anime_official_cite' => 'http://www.gonzo.co.jp/archives/basilisk/',
            'artist_official_cite' => 'https://www.mizukinana.jp/',
            'image_path' => 'img/himemurasaki.jpg',
            'genre_id' => 2,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 109
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=LRjGQNj8jWY',
            'title' => 'ETERNAL BLAZE',
            'artist_name' => '水樹奈々',
            'anime_official_cite' => 'https://www.nanoha.com/archive2/',
            'artist_official_cite' => 'https://www.mizukinana.jp/',
            'image_path' => 'img/eternal blaze.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 110
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=hZ90PXBPoJY',
            'title' => 'Spiritual Garden',
            'artist_name' => '田村ゆかり',
            'anime_official_cite' => 'https://www.nanoha.com/archive2/',
            'artist_official_cite' => 'https://www.tamurayukari.com/',
            'image_path' => 'img/spiritual garden.jpg',
            'genre_id' => 4,
            'music_tone_id' => 3,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 110
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=gKK334SPk48',
            'title' => 'Venus Say',
            'artist_name' => 'Buzy',
            'anime_official_cite' => 'https://www6.nhk.or.jp/anime/program/detail.html?i=spica',
            'artist_official_cite' => 'https://www.teichiku.co.jp/artist/buzy/',
            'image_path' => 'img/venus.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 111
        ]);
        
        Music::create([
            'youtube' => 'https://www.nicovideo.jp/watch/sm2643550',
            'title' => '見上げてごらん夜の星を',
            'artist_name' => 'BIGIN',
            'anime_official_cite' => 'https://www6.nhk.or.jp/anime/program/detail.html?i=spica',
            'artist_official_cite' => 'https://www.begin1990.com/',
            'image_path' => 'img/miagetegoran.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 111
        ]);
        
        Music::create([
            'youtube' => 'https://www.nicovideo.jp/watch/sm2643550',
            'title' => '見上げてごらん夜の星を',
            'artist_name' => 'BIGIN',
            'anime_official_cite' => 'https://www6.nhk.or.jp/anime/program/detail.html?i=spica',
            'artist_official_cite' => 'https://www.begin1990.com/',
            'image_path' => 'img/miagetegoran.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 111
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=TI_oCadNArw',
            'title' => '月蝕グランギニョル',
            'artist_name' => 'ALI PROJECT',
            'anime_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/-/Animedata/Z0747.html',
            'artist_official_cite' => 'https://aliproject.jp/',
            'image_path' => 'img/gessyoku.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 112
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=1tdYtUQLo8Q',
            'title' => '未來のイヴ',
            'artist_name' => 'ALI PROJECT',
            'anime_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/-/Animedata/Z0747.html',
            'artist_official_cite' => 'https://aliproject.jp/',
            'image_path' => 'img/gessyoku.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 112
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=W3tsQD1mdmE',
            'title' => 'Northern lights',
            'artist_name' => '林原めぐみ',
            'anime_official_cite' => 'https://shamanking-project.com/',
            'artist_official_cite' => 'http://king-cr.jp/artist/hayashi/',
            'image_path' => 'img/northernlights.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 113
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=tjdvnoTXou0',
            'title' => 'おもかげ',
            'artist_name' => '林原めぐみ',
            'anime_official_cite' => 'https://shamanking-project.com/',
            'artist_official_cite' => 'http://king-cr.jp/artist/hayashi/',
            'image_path' => 'img/omokage.jpg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 113
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=cXJArpzZl_I',
            'title' => 'oath sign',
            'artist_name' => 'LiSA',
            'anime_official_cite' => 'https://www.fate-zero.jp/',
            'artist_official_cite' => 'https://www.lxixsxa.com/',
            'image_path' => 'img/oathsign.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 114
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=LnMA-BrpDCg',
            'title' => 'MEMORIA',
            'artist_name' => '藍井エイル',
            'anime_official_cite' => 'https://www.fate-zero.jp/',
            'artist_official_cite' => 'http://www.aoieir.com/',
            'image_path' => 'img/oathsign.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 114
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=g-HcGIino8g',
            'title' => 'X-encounter',
            'artist_name' => '黒崎真音',
            'anime_official_cite' => 'https://www.tokyo-ravens.com/',
            'artist_official_cite' => 'https://nbcuni-music.com/maon/',
            'image_path' => 'img/xencounter.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 115
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ydSKcREFa8U',
            'title' => '君が笑む夕暮れ',
            'artist_name' => '南條愛乃',
            'anime_official_cite' => 'https://www.tokyo-ravens.com/',
            'artist_official_cite' => 'https://nbcuni-music.com/yoshino_nanjo/',
            'image_path' => 'img/kimigaemuyuugure.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 115
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=uHvbTMlb9m0',
            'title' => '凶夢伝染',
            'artist_name' => 'ALI PROJECT',
            'anime_official_cite' => 'https://www.chiba-tv.com/info/detail/53963',
            'artist_official_cite' => 'https://aliproject.jp/',
            'image_path' => 'img/kyoumudennsenn.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 116
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=7e0Tgyw_A9I',
            'title' => 'anamnesis',
            'artist_name' => 'Annabel',
            'anime_official_cite' => 'https://www.chiba-tv.com/info/detail/53963',
            'artist_official_cite' => 'https://annabel.jp/',
            'image_path' => 'img/anamnesis.jpg',
            'genre_id' => 2,
            'music_tone_id' => 5,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 116
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=kwX_saRjVi4',
            'title' => 'ポルターガイスト',
            'artist_name' => '小島麻由美',
            'anime_official_cite' => 'https://www.production-ig.co.jp/works/ghost-hound/',
            'artist_official_cite' => 'https://kojimamayumi.com/',
            'image_path' => 'img/poruta-gaisuto.jpg',
            'genre_id' => 4,
            'music_tone_id' => 13,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 117
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=2fSHqXUWJtM',
            'title' => 'Call My Name〜風鳴りの丘〜',
            'artist_name' => 'Yucca',
            'anime_official_cite' => 'https://www.production-ig.co.jp/works/ghost-hound/',
            'artist_official_cite' => 'https://www.teichiku.co.jp/artist/yucca/profile/',
            'image_path' => 'img/callmyname.jpg',
            'genre_id' => 2,
            'music_tone_id' => 8,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 117
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=b95N0HtFoAY',
            'title' => 'コールドフィンガーガール',
            'artist_name' => '栗山千明',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/contents/level-e/staff/index.html',
            'artist_official_cite' => 'https://www.chiakikuriyama.com/',
            'image_path' => 'img/coldfingergirl.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 118
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=tDeTKtbE32c',
            'title' => '「夢」～ムゲンノカナタ～',
            'artist_name' => 'ViViD',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/contents/level-e/staff/index.html',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/vivid/',
            'image_path' => 'img/yumemugennnokanata.jpg',
            'genre_id' => 1,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 118
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=I7e6yDAobE4',
            'title' => 'Paraiso',
            'artist_name' => 'SOIL ＆“PIMP”SESSIONS',
            'anime_official_cite' => 'https://www.fujitv.co.jp/b_hp/michikotohatchin/',
            'artist_official_cite' => 'https://www.jvcmusic.co.jp/soilpimp/top.html',
            'image_path' => 'img/paraiso.jpg',
            'genre_id' => 6,
            'music_tone_id' => 10,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 119
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=KBnNqDUNKHQ',
            'title' => 'ベストフレンド',
            'artist_name' => 'カルテット',
            'anime_official_cite' => 'https://www.fujitv.co.jp/b_hp/michikotohatchin/',
            'artist_official_cite' => 'https://www.jvcmusic.co.jp/-/Profile/A020737.html',
            'image_path' => 'img/besutofurenndo.jpg',
            'genre_id' => 5,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 119
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=FD5j_SUA59o',
            'title' => 'Theme principal',
            'artist_name' => '倖山リオ、KATSU(angela)',
            'anime_official_cite' => 'http://king-cr.jp/special/yakushijiryouko/release.html',
            'artist_official_cite' => 'http://co-aza.net/kohyama/index',
            'image_path' => 'img/theme.jpeg',
            'genre_id' => 6,
            'music_tone_id' => 10,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 120
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=FD5j_SUA59o',
            'title' => 'A demain sur la lune',
            'artist_name' => '倖山リオ、KATSU(angela)',
            'anime_official_cite' => 'http://king-cr.jp/special/yakushijiryouko/release.html',
            'artist_official_cite' => 'http://co-aza.net/kohyama/index',
            'image_path' => 'img/ademainsurlalune.jpg',
            'genre_id' => 2,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 120
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=4MZKMzo-NiM',
            'title' => 'コッペリアの柩',
            'artist_name' => 'ALI PROJECT',
            'anime_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/tv/noir/',
            'artist_official_cite' => 'https://aliproject.jp/',
            'image_path' => 'img/kopperianohitugi.jpg',
            'genre_id' => 4,
            'music_tone_id' => 13,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 121
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=c2ryq74p4Lg',
            'title' => 'きれいな感情',
            'artist_name' => '新居昭乃',
            'anime_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/tv/noir/',
            'artist_official_cite' => 'http://www.araiakino.com/',
            'image_path' => 'img/kireinakanjou.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 121
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=eFCW2o7sWm0',
            'title' => 'NAJIKA',
            'artist_name' => 'Diligent Circle of Ekoda',
            'anime_official_cite' => 'https://anime.eiga.com/program/101420/',
            'artist_official_cite' => 'https://www.oricon.co.jp/prof/285708/products/459385/1/',
            'image_path' => 'img/najika.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 122
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=wcnxGxwBY5o',
            'title' => 'BODY & MIND',
            'artist_name' => '原田菜都実',
            'anime_official_cite' => 'https://anime.eiga.com/program/101420/',
            'artist_official_cite' => 'https://www.oricon.co.jp/prof/285708/products/459385/1/',
            'image_path' => 'img/najika.jpg',
            'genre_id' => 4,
            'music_tone_id' => 13,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 122
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=c3w0GIzrqbU',
            'title' => 'Jolly Jolly',
            'artist_name' => 'JiLL-Decoy association',
            'anime_official_cite' => 'http://www.gonzo.co.jp/archives/redgarden/index.html',
            'artist_official_cite' => 'http://www.jilldecoy.com/',
            'image_path' => 'img/jollyjolly.jpg',
            'genre_id' => 5,
            'music_tone_id' => 13,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 123
        ]);
        
        Music::create([
            'youtube' => 'https://www.nicovideo.jp/watch/sm9750760',
            'title' => '☆Rock the LM.C☆',
            'artist_name' => 'LM.C',
            'anime_official_cite' => 'http://www.gonzo.co.jp/archives/redgarden/index.html',
            'artist_official_cite' => 'https://www.lovely-mocochang.com/',
            'image_path' => 'img/rockthelmc.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 123
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=hU1rTET0n5c',
            'title' => 'RIDEBACK',
            'artist_name' => 'MELL',
            'anime_official_cite' => 'https://www.at-x.com/program/detail/2357',
            'artist_official_cite' => 'http://nbcuni-music.com/ive/mell/index2.html',
            'image_path' => 'img/rideback.jpg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 124
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=wvTSEUpbbgY',
            'title' => '記憶',
            'artist_name' => 'ユンナ',
            'anime_official_cite' => 'https://www.at-x.com/program/detail/2357',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/younha/',
            'image_path' => 'img/kioku.jpg',
            'genre_id' => 4,
            'music_tone_id' => 5,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 124
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=1SH7hLioDvQ',
            'title' => 'lull~そして僕らは~ ',
            'artist_name' => 'Ray',
            'anime_official_cite' => 'http://nagiasu.jp/',
            'artist_official_cite' => 'https://nbcuni-music.com/ray/',
            'image_path' => 'img/lull.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 125
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ALk0_ImQ-fY',
            'title' => 'アクアテラリウム',
            'artist_name' => 'やなぎなぎ',
            'anime_official_cite' => 'http://nagiasu.jp/',
            'artist_official_cite' => 'https://yanaginagi.net/',
            'image_path' => 'img/akuaterariumu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 125
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=kwuCnaWhCx8',
            'title' => '割れたリンゴ',
            'artist_name' => '渡辺早季(CV:種田梨沙)',
            'anime_official_cite' => 'https://a1p.jp/works/shinsekaiyori/',
            'artist_official_cite' => 'https://osawa-inc.co.jp/women/tanedarisa/',
            'image_path' => 'img/waretarinngo.jpg',
            'genre_id' => 3,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 126
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=BlEmAcDm8pY',
            'title' => 'ノルニル',
            'artist_name' => 'やくしまるえつこメトロオーケストラ',
            'anime_official_cite' => 'https://penguindrum10th.jp/',
            'artist_official_cite' => 'https://yakushimaruetsuko.com/',
            'image_path' => 'img/noruniru.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 127
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=F-yWribAvMI',
            'title' => 'DEAR FUTURE',
            'artist_name' => 'coaltar of the deepers',
            'anime_official_cite' => 'https://penguindrum10th.jp/',
            'artist_official_cite' => 'https://www.creativeman.co.jp/event/cod21/',
            'image_path' => 'img/dearfuture.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 127
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=-LWNPKrMqjI',
            'title' => '不完全燃焼',
            'artist_name' => '石川智晶',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/kamisama-dolls/',
            'artist_official_cite' => 'https://www.chiakiishikawa.com/',
            'image_path' => 'img/hukannzennnennsyou.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 128
        ]); 
        
        Music::create([
            'youtube' => 'https://www.nicovideo.jp/watch/nm15124840',
            'title' => 'スイッチが入ったら',
            'artist_name' => '石川智晶',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/kamisama-dolls/',
            'artist_official_cite' => 'https://www.chiakiishikawa.com/',
            'image_path' => 'img/hukannzennnennsyou.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 128
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=zo1FrMQ6eKQ',
            'title' => '迷子犬と雨のビート',
            'artist_name' => 'ASIAN KUNG-FU GENERATION',
            'anime_official_cite' => 'https://yojouhan.noitamina.tv/',
            'artist_official_cite' => 'https://www.asiankung-fu.com/s/n80/?ima=3901',
            'image_path' => 'img/maigokenntoamenobi-to.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 129
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=P8uVeSuYjfs',
            'title' => '神様のいうとおり',
            'artist_name' => 'やくしまるえつこ',
            'anime_official_cite' => 'https://yojouhan.noitamina.tv/',
            'artist_official_cite' => 'https://yakushimaruetsuko.com/',
            'image_path' => 'img/kamisamanoiutoori.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 129
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=nKnAdE_gtO0',
            'title' => 'How to go',
            'artist_name' => 'School Food Punishment',
            'anime_official_cite' => 'https://www.un-go.com/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/schoolfoodpunishment/',
            'image_path' => 'img/howtogo.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 130
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=oXYL0lclVqE',
            'title' => 'Fantasy',
            'artist_name' => 'LAMA',
            'anime_official_cite' => 'https://www.un-go.com/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/lama/',
            'image_path' => 'img/fantasy.jpg',
            'genre_id' => 4,
            'music_tone_id' => 13,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 130
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ronGQxBCLEw',
            'title' => 'リアルワールド',
            'artist_name' => 'nano.RIPE',
            'anime_official_cite' => 'https://www.marv.jp/special/jintai/',
            'artist_official_cite' => 'http://nanoripe.com/',
            'image_path' => 'img/riaruwa-rudo.jpg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 131
        ]); 
        
        Music::create([
            'youtube' => 'https://www.nicovideo.jp/watch/sm18589617',
            'title' => 'ユメのなかノわたしのユメ',
            'artist_name' => '伊藤真澄',
            'anime_official_cite' => 'https://www.marv.jp/special/jintai/',
            'artist_official_cite' => 'https://www.lantis.jp/artist/itoumasumi/',
            'image_path' => 'img/yumenonakanowatasinoyume.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 131
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=PKDoT1CZhSY',
            'title' => 'Theme for Panty & Stocking',
            'artist_name' => 'Hoshina Anniversary',
            'anime_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/-/Animedata/Z0332.html',
            'artist_official_cite' => 'https://www.discogs.com/ja/artist/2064543-Hoshina-Anniversary',
            'image_path' => 'img/themeforpanty&stocking.jpeg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 132
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=1-4CYB2G8eY',
            'title' => 'Fallen Angel',
            'artist_name' => 'Mitsunori Ikeda',
            'anime_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/-/Animedata/Z0332.html',
            'artist_official_cite' => 'https://twitter.com/pokomaro',
            'image_path' => 'img/fallenangel.jpg',
            'genre_id' => 2,
            'music_tone_id' => 5,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 132
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ah-dMoAvSPs',
            'title' => '恋のオーケストラ',
            'artist_name' => '吉谷彩子',
            'anime_official_cite' => 'http://king-cr.jp/special/nazokano_x/',
            'artist_official_cite' => 'https://tristone.co.jp/sp/actors/yoshitani/',
            'image_path' => 'img/koinoo-kesutora.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 133
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=AJ7kHSDsttA',
            'title' => '放課後の約束',
            'artist_name' => '吉谷彩子',
            'anime_official_cite' => 'http://king-cr.jp/special/nazokano_x/',
            'artist_official_cite' => 'https://tristone.co.jp/sp/actors/yoshitani/',
            'image_path' => 'img/koinoo-kesutora.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 133
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=yTW2pOMEZOc',
            'title' => '光の破片',
            'artist_name' => '高橋 優',
            'anime_official_cite' => 'http://orange-anime.com/',
            'artist_official_cite' => 'https://www.takahashiyu.com/',
            'image_path' => 'img/hikarinohahenn.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 134
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=nhM1_sgokb4',
            'title' => '未来',
            'artist_name' => 'コブクロ',
            'anime_official_cite' => 'http://orange-anime.com/',
            'artist_official_cite' => 'https://kobukuro.com/',
            'image_path' => 'img/mirai.jpg',
            'genre_id' => 2,
            'music_tone_id' => 5,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 134
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=tKhbJNSX3UI',
            'title' => '侵略ノススメ☆',
            'artist_name' => 'ULTRA-PRISM',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/ika-musume/',
            'artist_official_cite' => 'http://ultra-prism.com/',
            'image_path' => 'img/sinnryakunosusume.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 135
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=5juxpOKP2ek',
            'title' => 'メタメリズム',
            'artist_name' => '伊藤かな恵',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/ika-musume/',
            'artist_official_cite' => 'https://www.aoni.co.jp/search/ito-kanae.html',
            'image_path' => 'img/metamerizumu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 135
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=o5c4PaK9q48',
            'title' => 'メニメニマニマニ',
            'artist_name' => '高宮なすの(CV：鳴海杏子)',
            'anime_official_cite' => 'http://te-kyu.com/',
            'artist_official_cite' => 'https://twitter.com/narumi_kyoko',
            'image_path' => 'img/menimenimanimani.jpg',
            'genre_id' => 3,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 136
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=6zkmrwjgS5Y',
            'title' => '夕暮アフター',
            'artist_name' => '高宮なすの(CV：鳴海杏子)',
            'anime_official_cite' => 'http://te-kyu.com/',
            'artist_official_cite' => 'https://twitter.com/narumi_kyoko',
            'image_path' => 'img/yuugureafuta-.jpeg',
            'genre_id' => 3,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 136
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=lVvqRfQ3cpg',
            'title' => 'Happy Girl',
            'artist_name' => '喜多村英梨',
            'anime_official_cite' => 'http://king-cr.jp/special/papakiki/',
            'artist_official_cite' => 'https://erikitamura.com/',
            'image_path' => 'img/happygirl.jpg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 137
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=iqfWJvdx0CA',
            'title' => 'Coloring',
            'artist_name' => '堀江由衣',
            'anime_official_cite' => 'http://king-cr.jp/special/papakiki/',
            'artist_official_cite' => 'https://horie-yui.com/',
            'image_path' => 'img/coloring.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 137
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ePSz2NODsdc',
            'title' => '地獄の沙汰も君次第',
            'artist_name' => '地獄の沙汰オールスターズ',
            'anime_official_cite' => 'http://www.hozukino-reitetsu.com/1series/',
            'artist_official_cite' => 'https://tower.jp/artist/2217876/%E5%9C%B0%E7%8D%84%E3%81%AE%E6%B2%99%E6%B1%B0%E3%82%AA%E3%83%BC%E3%83%AB%E3%82%B9%E3%82%BF%E3%83%BC%E3%82%BA',
            'image_path' => 'img/jigokunosatamokimisidai.jpg',
            'genre_id' => 3,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 138
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=hHPrWo8kP4Y',
            'title' => '大きな金魚の樹の下で',
            'artist_name' => '地獄の沙汰オールスターズ',
            'anime_official_cite' => 'http://www.hozukino-reitetsu.com/1series/',
            'artist_official_cite' => 'https://tower.jp/artist/2217876/%E5%9C%B0%E7%8D%84%E3%81%AE%E6%B2%99%E6%B1%B0%E3%82%AA%E3%83%BC%E3%83%AB%E3%82%B9%E3%82%BF%E3%83%BC%E3%82%BA',
            'image_path' => 'img/ookinakinngyonokinositade.jpg',
            'genre_id' => 3,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 138
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=mgympfbOgqw',
            'title' => 'お願いマッスル',
            'artist_name' => '紗倉ひびき(CV：ファイルーズあい)＆街雄鳴造(CV：石川界人)／街雄鳴造(CV：石川界人)',
            'anime_official_cite' => 'https://dumbbell-anime.jp/',
            'artist_official_cite' => 'http://www.pro-fit.co.jp/talent_fairouzai.html',
            'image_path' => 'img/onegaimassuru.jpg',
            'genre_id' => 3,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 139
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Ez3BKRr6Zuk',
            'title' => 'マッチョアネーム？',
            'artist_name' => '街雄鳴造(CV：石川界人)',
            'anime_official_cite' => 'https://dumbbell-anime.jp/',
            'artist_official_cite' => 'https://stay-luck.com/talent/ishikawa-kaito/',
            'image_path' => 'img/onegaimassuru.jpg',
            'genre_id' => 3,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 139
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=WvMcbMh3kI0',
            'title' => '輪！Moon！dass！cry！',
            'artist_name' => '田中望・菊池茜・鷺宮しおり(CV.赤﨑千夏・戸松遥・豊崎愛生)',
            'anime_official_cite' => 'http://jyoshimuda.com/',
            'artist_official_cite' => '',
            'image_path' => 'img/wamu-ndaskurai.jpg',
            'genre_id' => 3,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 140
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=sG6PDsYMmW0',
            'title' => '青春のリバーブ',
            'artist_name' => '田中望・菊池茜・鷺宮しおり(CV.赤﨑千夏・戸松遥・豊崎愛生)',
            'anime_official_cite' => 'http://jyoshimuda.com/',
            'artist_official_cite' => '',
            'image_path' => 'img/wamu-ndaskurai.jpg',
            'genre_id' => 3,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 140
        ]); 
        
        Music::create([
            'youtube' => 'https://www.nicovideo.jp/watch/sm3796859',
            'title' => '強引niマイYeah～',
            'artist_name' => '絶望少女達',
            'anime_official_cite' => 'http://king-cr.jp/special/zetsubou2/top.html',
            'artist_official_cite' => '',
            'image_path' => 'img/gouinni.jpg',
            'genre_id' => 3,
            'music_tone_id' => 13,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 141
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Dch6_-DdHjk',
            'title' => '絶世美人',
            'artist_name' => '絶望少女達',
            'anime_official_cite' => 'http://king-cr.jp/special/zetsubou2/top.html',
            'artist_official_cite' => '',
            'image_path' => 'img/zesseibijo.jpg',
            'genre_id' => 3,
            'music_tone_id' => 10,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 141
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=hk7lp9IvkN0',
            'title' => 'BOYS & GIRLS',
            'artist_name' => 'LM.C',
            'anime_official_cite' => 'https://www.marv.jp/special/reborn/',
            'artist_official_cite' => 'https://www.lovely-mocochang.com/',
            'image_path' => 'img/boys&girls.jpg',
            'genre_id' => 3,
            'music_tone_id' => 10,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 142
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=hk7lp9IvkN0',
            'title' => 'ONE NIGHT STAR',
            'artist_name' => 'the ARROWS',
            'anime_official_cite' => 'https://www.marv.jp/special/reborn/',
            'artist_official_cite' => 'https://twitter.com/the_arrows',
            'image_path' => 'img/onenightstar.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 142
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=G6LZk77iFp8',
            'title' => 'Funny Sunny Day',
            'artist_name' => 'SxOxU',
            'anime_official_cite' => 'https://www.marv.jp/special/reborn/',
            'artist_official_cite' => 'https://natalie.mu/music/artist/8364',
            'image_path' => 'img/funnysunnyday.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 142
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=zPoQbLQteXk',
            'title' => 'STAND UP!',
            'artist_name' => 'Lead',
            'anime_official_cite' => 'https://www.marv.jp/special/reborn/',
            'artist_official_cite' => 'http://lead.tv/',
            'image_path' => 'img/standup.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 142
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=3S5Yu9HpE3I',
            'title' => '残酷な天使のテーゼ',
            'artist_name' => '高橋洋子',
            'anime_official_cite' => 'https://www.evangelion.co.jp/',
            'artist_official_cite' => 'http://king-cr.jp/artist/takahashi/',
            'image_path' => 'img/zannkokunatennsinote-ze.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 143
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=O1bhZgkC4Gw',
            'title' => 'Cry Baby',
            'artist_name' => 'Official髭男dism',
            'anime_official_cite' => 'https://tokyo-revengers-anime.com/',
            'artist_official_cite' => 'https://higedan.com/',
            'image_path' => 'img/crybaby.jpg',
            'genre_id' => 4,
            'music_tone_id' => 8,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 144
        ]); 
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=BG24CRTNjCY',
            'title' => '紅蓮華',
            'artist_name' => 'LiSA',
            'anime_official_cite' => 'https://kimetsu.com/anime/',
            'artist_official_cite' => 'https://www.lxixsxa.com/',
            'image_path' => 'img/gurennge.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 145
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=dy90tA3TT1c',
            'title' => '怪物',
            'artist_name' => 'YOASOBI',
            'anime_official_cite' => 'https://bst-anime.com/',
            'artist_official_cite' => 'https://www.yoasobi-music.jp/',
            'image_path' => 'img/kaibutu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 146
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ugD7IVSmrD8',
            'title' => '世界が終るまでは・・・',
            'artist_name' => 'WANDS',
            'anime_official_cite' => 'https://lineup.toei-anim.co.jp/ja/tv/movie_slumdunk/',
            'artist_official_cite' => 'https://wands-official.jp/',
            'image_path' => 'img/sekaigaowarumadeha.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 147
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=8iSG4jIUkcU',
            'title' => 'そばかす',
            'artist_name' => 'JUDY AND MARY',
            'anime_official_cite' => 'https://www.kenshin-tv.com/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/JudyAndMary/',
            'image_path' => 'img/sobakasu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 148
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=caF6nJxTejc',
            'title' => '君の知らない物語',
            'artist_name' => 'supercell',
            'anime_official_cite' => 'https://www.monogatari-series.com/',
            'artist_official_cite' => 'https://www.supercell.jp/',
            'image_path' => 'img/kiminosiranaimonogatari.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 149
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=quYyKHR7W5o',
            'title' => '心絵',
            'artist_name' => 'ロードオブメジャー',
            'anime_official_cite' => 'https://www6.nhk.or.jp/anime/program/detail.html?i=major',
            'artist_official_cite' => 'https://www.hmv.co.jp/artist_%E3%83%AD%E3%83%BC%E3%83%89%E3%82%AA%E3%83%96%E3%83%A1%E3%82%B8%E3%83%A3%E3%83%BC_000000000208946/biography/',
            'image_path' => 'img/kokoroe.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 150
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=hf3DcnSByTA',
            'title' => 'Butter-Fly',
            'artist_name' => '和田光司',
            'anime_official_cite' => 'https://www.toei-anim.co.jp/tv/dejimon/',
            'artist_official_cite' => 'http://wadakoji.com/',
            'image_path' => 'img/butterfly.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 151
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=hf3DcnSByTA',
            'title' => 'God Knows・・・',
            'artist_name' => '平野 綾/涼宮 ハルヒ',
            'anime_official_cite' => 'https://www.kyotoanimation.co.jp/haruhi/',
            'artist_official_cite' => 'https://grick.jp/artist/hirano.php',
            'image_path' => 'img/godknows.jpg',
            'genre_id' => 3,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 152
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=kqBlD0NW_EQ',
            'title' => 'ハレ晴レユカイ',
            'artist_name' => '長門有希（C.V.茅原実里）',
            'anime_official_cite' => 'https://www.kyotoanimation.co.jp/haruhi/',
            'artist_official_cite' => 'https://minorichihara.com/',
            'image_path' => 'img/harehareyukai.jpg',
            'genre_id' => 3,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 152
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=3exsRhw3xt8',
            'title' => 'シュガーソングとビターステップ',
            'artist_name' => 'UNISON SQUARE GARDEN',
            'anime_official_cite' => '',
            'artist_official_cite' => 'https://minorichihara.com/',
            'image_path' => 'img/syuga-sonngu.jpg',
            'genre_id' => 3,
            'music_tone_id' => 9,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 153
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=1tk1pqwrOys',
            'title' => '廻廻奇譚',
            'artist_name' => 'Eve',
            'anime_official_cite' => 'https://jujutsukaisen.jp/',
            'artist_official_cite' => 'https://eveofficial.com/',
            'image_path' => 'img/kaikai.jpg',
            'genre_id' => 5,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 154
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=AWEm4tA2hMc',
            'title' => 'LOST IN PARADISE feat. AKLO',
            'artist_name' => 'ALI',
            'anime_official_cite' => 'https://jujutsukaisen.jp/',
            'artist_official_cite' => 'https://alienlibertyinternational.com/',
            'image_path' => 'img/lostinparadise.jpg',
            'genre_id' => 6,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 154
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=CbH2F0kXgTY',
            'title' => 'ミックスナッツ',
            'artist_name' => 'Official髭男dism',
            'anime_official_cite' => 'https://spy-family.net/',
            'artist_official_cite' => 'https://higedan.com/',
            'image_path' => 'img/mikkusunattu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 155
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=nRKJBpFFsuI',
            'title' => '喜劇',
            'artist_name' => '星野 源',
            'anime_official_cite' => 'https://spy-family.net/',
            'artist_official_cite' => 'https://www.hoshinogen.com/',
            'image_path' => 'img/kigeki.jpg',
            'genre_id' => 4,
            'music_tone_id' => 13,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 155
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=8pQuRe_2gBs',
            'title' => 'ココロオドル',
            'artist_name' => 'nobody knows＋',
            'anime_official_cite' => 'https://www.sunrise-inc.co.jp/sd_gundamforce/',
            'artist_official_cite' => 'https://nobodyknows-fc.com/',
            'image_path' => 'img/kokoroodoru.jpg',
            'genre_id' => 9,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 156
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=W6DOkcLlIgE',
            'title' => '創聖のアクエリオン',
            'artist_name' => 'AKINO',
            'anime_official_cite' => 'http://www.aquarion.info/',
            'artist_official_cite' => 'https://www.jvcmusic.co.jp/flyingdog/-/Artist/A019681.html',
            'image_path' => 'img/souseinoakuerionn.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 157
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=XPsmi_wbsRs',
            'title' => 'ライオン',
            'artist_name' => '中島 愛／シェリル・ノーム starring May’n',
            'anime_official_cite' => 'https://macross.jp/series-detail/macrossf/',
            'artist_official_cite' => 'https://nakajima-megumi.jp/',
            'image_path' => 'img/raionn.jpg',
            'genre_id' => 3,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 158
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=7EuTPTVpuNI',
            'title' => 'コネクト',
            'artist_name' => 'ClariS',
            'anime_official_cite' => 'https://10th.madoka-magica.com/',
            'artist_official_cite' => 'https://www.clarismusic.jp/',
            'image_path' => 'img/konekuto.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 159
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=wfCcs0vLysk',
            'title' => 'インフェルノ',
            'artist_name' => 'Mrs．GREEN APPLE',
            'anime_official_cite' => 'https://fireforce-anime.jp/season1/',
            'artist_official_cite' => 'https://mrsgreenapple.com/',
            'image_path' => 'img/inferno.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 160
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=pfGI91CFtRg',
            'title' => 'ハルノヒ',
            'artist_name' => 'あいみょん',
            'anime_official_cite' => 'https://www.shinchan-app.jp/anime/detail/movie-027/',
            'artist_official_cite' => 'https://www.aimyong.net/',
            'image_path' => 'img/harunohi.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 161
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=KpsJWFuVTdI',
            'title' => 'ブルーバード',
            'artist_name' => 'いきものがかり',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/naruto/index2.html',
            'artist_official_cite' => 'https://ikimonogakari.com/',
            'image_path' => 'img/buru-ba-do.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 74
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=0tWbScMyBLM',
            'title' => '1／3の純情な感情',
            'artist_name' => 'SIAM SHADE',
            'anime_official_cite' => 'https://www.kenshin-tv.com/',
            'artist_official_cite' => 'https://siamshade.jp/',
            'image_path' => 'img/sannbunnnoitinojunnjounakannjou.jpg',
            'genre_id' => 4,
            'music_tone_id' => 5,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 148
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=FT0GKCuSaW0',
            'title' => '裸の勇者',
            'artist_name' => 'Vaundy',
            'anime_official_cite' => 'https://osama-ranking.com/',
            'artist_official_cite' => 'https://vaundy.jp/',
            'image_path' => 'img/hadakanoyuusya.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 162
        ]);
        
        Music::create([
            'youtube' => 'https://www.nicovideo.jp/watch/sm24262821',
            'title' => 'LOVE YOU ONLY',
            'artist_name' => 'TOKIO',
            'anime_official_cite' => 'https://www.animax.co.jp/programs/NN10002138',
            'artist_official_cite' => 'https://www.johnnys-net.jp/page?id=artistTop&artist=7',
            'image_path' => 'img/loveyouonly.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 163
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=zejYD43HyQo',
            'title' => 'GO！！！',
            'artist_name' => 'FLOW',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/naruto2002/',
            'artist_official_cite' => 'https://www.flow-official.jp/',
            'image_path' => 'img/go.jpg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 164
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Lw5o2pSrVbQ',
            'title' => 'オリオンをなぞる',
            'artist_name' => 'UNISON SQUARE GARDEN',
            'anime_official_cite' => 'http://www.tigerandbunny.net/tv/index.html',
            'artist_official_cite' => 'https://unison-s-g.com/',
            'image_path' => 'img/orionnwonazoru.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 165
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ZFoJYI7Q4iA',
            'title' => 'シルエット',
            'artist_name' => 'KANA-BOON',
            'anime_official_cite' => 'http://www.tigerandbunny.net/tv/index.html',
            'artist_official_cite' => 'https://www.kanaboon.com/',
            'image_path' => 'img/siruetto.jpg',
            'genre_id' => 4,
            'music_tone_id' => 4,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 74
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=KpM6xNAgRoI',
            'title' => 'サムライハート',
            'artist_name' => 'SPYAIR',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/gintama/',
            'artist_official_cite' => 'https://www.spyair.net/',
            'image_path' => 'img/samuraiha-to.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 75
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=mgWONfthS9U',
            'title' => '君が好きだと叫びたい',
            'artist_name' => 'BAAD',
            'anime_official_cite' => 'https://slamdunk-movie.jp/',
            'artist_official_cite' => '',
            'image_path' => 'img/kimigasukidatosakebitai.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 147
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=d9eudCNJv1E',
            'title' => 'あなただけ見つめてる',
            'artist_name' => '大黒 摩季',
            'anime_official_cite' => 'https://slamdunk-movie.jp/',
            'artist_official_cite' => '',
            'image_path' => 'img/anatadakemitumeteru.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 147
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=LZW4zUmE0qY',
            'title' => 'ブラザービート',
            'artist_name' => 'Snow Man',
            'anime_official_cite' => 'https://osomatsusan-movie.jp/',
            'artist_official_cite' => 'https://www.johnnys-net.jp/page?id=artistTop&artist=43',
            'image_path' => 'img/buraza-bi-to.jpg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 166
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=WPl10ZrhCtk',
            'title' => '悪魔の子',
            'artist_name' => 'ヒグチアイ',
            'anime_official_cite' => 'https://shingeki.tv/final/',
            'artist_official_cite' => 'https://www.higuchiai.com/',
            'image_path' => 'img/akumanoko.jpg',
            'genre_id' => 5,
            'music_tone_id' => 8,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 167
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=2CnvZOs8TWM',
            'title' => '星間飛行',
            'artist_name' => '中島 愛 ランカ・リー',
            'anime_official_cite' => 'https://macross.jp/series-detail/macrossf/',
            'artist_official_cite' => 'https://nakajima-megumi.jp/',
            'image_path' => 'img/seikanhikou.jpg',
            'genre_id' => 3,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 158
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=yGcm81aaTHg',
            'title' => '明け星',
            'artist_name' => 'LiSA',
            'anime_official_cite' => 'https://kimetsu.com/anime/mugenresshahen_tv/',
            'artist_official_cite' => 'https://www.lxixsxa.com/',
            'image_path' => 'img/akebosi.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 168
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=C4QxX8X4PN4',
            'title' => 'Ring Ring Rainbow!!',
            'artist_name' => 'ゆいかおり(小倉唯・石原夏織)',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/dande/',
            'artist_official_cite' => 'http://www.yuikaori.info/',
            'image_path' => 'img/rainbow.jpeg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 169
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Yd4CQdcng7Y',
            'title' => 'Honey♥Come!!',
            'artist_name' => '小倉唯',
            'anime_official_cite' => 'https://www.tbs.co.jp/anime/dande/',
            'artist_official_cite' => 'http://www.ogurayui.jp/',
            'image_path' => 'img/honeycome.jpg',
            'genre_id' => 4,
            'music_tone_id' => 3,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 169
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=YfRPN3ryL2Y',
            'title' => 'Daydream café',
            'artist_name' => 'Petit Rabbit\'s',
            'anime_official_cite' => 'https://gochiusa.com/01/',
            'artist_official_cite' => 'https://gochiusa.com/series_cd/1_op.html',
            'image_path' => 'img/daydreamcafe.jpg',
            'genre_id' => 3,
            'music_tone_id' => 3,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 170
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=Vi-dA4c88t0',
            'title' => 'ぽっぴんジャンプ♪',
            'artist_name' => 'チマメ隊',
            'anime_official_cite' => 'https://gochiusa.com/01/',
            'artist_official_cite' => 'https://gochiusa.com/series_cd/1_op.html',
            'image_path' => 'img/poppinjannpu.jpg',
            'genre_id' => 3,
            'music_tone_id' => 3,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 170
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=E_BsL8_cFnE',
            'title' => 'めざせポケモンマスター',
            'artist_name' => '松本梨香',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/pokemon/pokemon/',
            'artist_official_cite' => 'https://www.sunmusic-gp.co.jp/talent/matsumoto_rica/',
            'image_path' => 'img/mezasepokemonnmasuta-.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 171
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=dM7x1PNZDo0',
            'title' => 'ウィーアー!',
            'artist_name' => 'きただにひろし',
            'anime_official_cite' => 'https://one-piece.com/',
            'artist_official_cite' => 'http://kitadani-hiroshi.com/',
            'image_path' => 'img/uli-a-.jpg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 172
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=q1l-oY3hMng',
            'title' => 'Give a reason',
            'artist_name' => '林原めぐみ',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/contents/slayers/next/story.html',
            'artist_official_cite' => 'http://king-cr.jp/artist/hayashi/',
            'image_path' => 'img/givemeareason.jpg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 173
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=6KYk5a93OC8',
            'title' => 'ムーンライト伝説',
            'artist_name' => 'Dali',
            'anime_official_cite' => 'http://sailormoon-official.com/animation/',
            'artist_official_cite' => '',
            'image_path' => 'img/mu-nnraitodennsetu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 9,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 174
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=s2bECQLBPdg',
            'title' => 'オレンジ',
            'artist_name' => '釘宮理恵、堀江由衣、喜多村英梨',
            'anime_official_cite' => 'https://www.tv-tokyo.co.jp/anime/toradora/',
            'artist_official_cite' => '',
            'image_path' => 'img/orenji.jpg',
            'genre_id' => 3,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 175
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=rkCRn2d0D2o',
            'title' => 'WILL',
            'artist_name' => '米倉千尋',
            'anime_official_cite' => 'http://houshin.info/10th/anime1999/index.htm',
            'artist_official_cite' => 'http://yonekurachihiro.com/discography/249.html',
            'image_path' => 'img/will.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 176
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=y1Kulj_pAbE',
            'title' => 'you',
            'artist_name' => '癒月',
            'anime_official_cite' => 'http://www.oyashirosama.com/web/top/',
            'artist_official_cite' => 'https://twitter.com/aonokioku',
            'image_path' => 'img/yuduki.jpg',
            'genre_id' => 2,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 177
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=eKoD2CRr_KA',
            'title' => '表裏一体',
            'artist_name' => 'ゆず',
            'anime_official_cite' => 'https://www.ntv.co.jp/hunterhunter/',
            'artist_official_cite' => 'https://yuzu-official.com/',
            'image_path' => 'img/hyouriittai.jpg',
            'genre_id' => 4,
            'music_tone_id' => 2,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 178
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=fRQtDjiRtI8',
            'title' => 'secret base～君がくれたもの～',
            'artist_name' => 'ZONE',
            'anime_official_cite' => 'https://www.anohana.jp/tv/',
            'artist_official_cite' => 'https://www.sonymusic.co.jp/artist/Zone/profile/',
            'image_path' => 'img/secretbase.jpg',
            'genre_id' => 2,
            'music_tone_id' => 5,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 179
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=HS1aw5WjWTc',
            'title' => '謎',
            'artist_name' => '小松未歩',
            'anime_official_cite' => 'https://www.ytv.co.jp/conan/',
            'artist_official_cite' => 'http://miho-komatsu.com/',
            'image_path' => 'img/nazo.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 180
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=bhrgZDJygqY',
            'title' => 'Believe',
            'artist_name' => 'Folder5',
            'anime_official_cite' => 'https://one-piece.com/',
            'artist_official_cite' => 'https://mora.jp/artist/176833/',
            'image_path' => 'img/believe.jpg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 172
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=uTqUiqszKAg',
            'title' => '銀河鉄道999',
            'artist_name' => 'ゴダイゴ',
            'anime_official_cite' => 'https://www.toei-anim.co.jp/movie/999/',
            'artist_official_cite' => 'http://godiego.co.jp/godiego/',
            'image_path' => 'img/ginngatetudou999.jpg',
            'genre_id' => 4,
            'music_tone_id' => 11,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 181
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=DxuizyiTBbw',
            'title' => 'ラムのラブソング',
            'artist_name' => '松谷 祐子',
            'anime_official_cite' => 'https://uy-allstars.com/',
            'artist_official_cite' => 'https://mora.jp/artist/1181955/',
            'image_path' => 'img/ramunorabusongu.jpg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 182
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=0eHvzRsbTMM',
            'title' => 'ゆずれない願い',
            'artist_name' => '田村直美',
            'anime_official_cite' => 'https://www.kbs-kyoto.co.jp/tv/anime/rayearth/',
            'artist_official_cite' => 'https://www.tamuranaomi.com/',
            'image_path' => 'img/yuzurenainegai.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 183
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=PplXyV4PR5Q',
            'title' => 'AXIA～ダイスキでダイキライ～',
            'artist_name' => 'ワルキューレ',
            'anime_official_cite' => 'https://macross.jp/',
            'artist_official_cite' => 'https://macross.jp/walkure/',
            'image_path' => 'img/axia.jpg',
            'genre_id' => 4,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 184
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=LZkEYrGH6PE',
            'title' => 'staple stable',
            'artist_name' => '戦場ヶ原ひたぎ（斎藤千和）',
            'anime_official_cite' => 'https://www.monogatari-series.com/bakemonogatari/',
            'artist_official_cite' => 'https://www.imenterprise.jp/profile.php?id=33',
            'image_path' => 'img/stablestable.jpg',
            'genre_id' => 3,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 149
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=SbU9ZZ0WHnA',
            'title' => '愛をとりもどせ!!',
            'artist_name' => 'クリスタルキング',
            'anime_official_cite' => 'https://hokuto-no-ken.jp/series/hokutonoken',
            'artist_official_cite' => 'https://www.navida.ne.jp/snavi/4906_1.html',
            'image_path' => 'img/aiwotorimodose.jpg',
            'genre_id' => 4,
            'music_tone_id' => 1,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 185
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=TjShfu9W52E',
            'title' => 'This game',
            'artist_name' => '鈴木このみ',
            'anime_official_cite' => 'http://ngnl.jp/tv/',
            'artist_official_cite' => 'https://www.konomi-suzuki.net/',
            'image_path' => 'img/thisgame.jpg',
            'genre_id' => 4,
            'music_tone_id' => 7,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 186
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=C7aCInI-g10',
            'title' => 'DUVET',
            'artist_name' => 'bôa',
            'anime_official_cite' => 'https://www.nbcuni.co.jp/rondorobe/anime/lain/login.html',
            'artist_official_cite' => 'https://ja-jp.facebook.com/BoAUK',
            'image_path' => 'img/duvet.jpg',
            'genre_id' => 10,
            'music_tone_id' => 6,
            'gender_id' => config('gender.女性ボーカル'),
            'anime_id' => 187
        ]);
        
        Music::create([
            'youtube' => 'https://www.youtube.com/watch?v=ne1KHJVFspU',
            'title' => '遠い叫び',
            'artist_name' => '仲井戸麗市',
            'anime_official_cite' => 'https://www.nbcuni.co.jp/rondorobe/anime/lain/login.html',
            'artist_official_cite' => 'http://www.up-down.com/020chabo/index0.html',
            'image_path' => 'img/tooisakebi.jpg',
            'genre_id' => 4,
            'music_tone_id' => 8,
            'gender_id' => config('gender.男性ボーカル'),
            'anime_id' => 187
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
