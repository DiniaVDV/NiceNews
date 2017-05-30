<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*-------------------------------------------------------------*/
        DB::table('articles')->insert([
            'user_id' => '8',
            'title' => 'Что такое Lorem Ipsum?',
            'body' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.',
            'img' => 'DSC07019.JPG',
            'category_id' => 1,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '9',
            'title' => 'Откуда он появился?',
            'body' => 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.',
            'img' => 'DSC01508.JPG',
            'category_id' => 2,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '9',
            'title' => 'Почему он используется?',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
            'img' => 'An158.JPG',
            'category_id' => 3,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Где его взять?',
            'body' => 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.',
            'img' => 'P1140714.jpg',
            'category_id' => 4,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Lorem Ipsum',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc vitae est porttitor iaculis at sed ipsum. Donec eu rutrum ipsum. Morbi ut venenatis lectus. Nullam blandit sed felis laoreet scelerisque. Curabitur tempus neque tellus, vitae vehicula quam bibendum nec. Maecenas dapibus lorem at lorem tincidunt, id gravida ex tincidunt. Maecenas nec leo maximus, congue libero porttitor, ultricies nunc. Aenean blandit consectetur eleifend. Duis luctus nisl ante, et volutpat arcu imperdiet ut. Etiam pellentesque dictum pharetra. Sed ut porttitor augue, a euismod sapien. Integer rutrum posuere consectetur.

Aenean tristique pharetra odio, et bibendum leo egestas non. Pellentesque feugiat risus sit amet facilisis volutpat. Curabitur tellus turpis, mattis id auctor eget, aliquam eu tortor. Praesent consectetur diam nisl, vel blandit nibh consectetur in. Donec scelerisque sem et libero ornare, quis mattis mauris condimentum. Nulla facilisi. Suspendisse sodales fermentum lacus, et ornare diam semper quis. Morbi tincidunt odio nec tellus faucibus, a aliquet tellus aliquam. Mauris nec ex non odio faucibus accumsan. Nullam in gravida arcu.

Aliquam hendrerit sed dolor commodo rhoncus. Quisque egestas, odio vel commodo semper, nulla magna sollicitudin dolor, quis ultrices augue nisi et odio. Nulla velit nibh, finibus sed metus sit amet, aliquam varius turpis. Curabitur scelerisque mauris quis urna volutpat dignissim. Vivamus tincidunt justo leo. Sed finibus, erat vel ullamcorper molestie, libero nisi finibus augue, ac euismod nisi velit quis nisi. Sed eu nibh ante. Nam venenatis sodales lorem, non ultricies libero lobortis eu. Vivamus dictum eu tortor et gravida. Praesent malesuada eros id eros gravida, sed congue tortor iaculis. Duis et orci condimentum, vulputate nibh sit amet, rutrum erat.

Maecenas ut eros enim. Mauris leo enim, laoreet vehicula sapien sed, elementum aliquam mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam elit metus, convallis sed est vitae, ornare finibus nisi. Nunc sapien felis, dignissim sit amet varius sed, cursus vitae mi. In viverra dictum mi non lobortis. Quisque non placerat massa, at ultricies orci. Duis id lacus nec nisi cursus convallis. Curabitur posuere sollicitudin dignissim. In euismod elit vel nulla pretium, sit amet consectetur erat accumsan. Pellentesque semper, ante at porttitor luctus, ligula libero molestie lorem, non tempus massa dolor ut elit. Nulla quis ante nec lacus ultrices bibendum vitae eget arcu. Cras dictum efficitur felis vitae vulputate. Quisque viverra turpis nibh, eget viverra tortor finibus sit amet. Etiam rhoncus eros nulla, at volutpat sapien lacinia ac. Curabitur et est erat.

Praesent ut ligula sed diam placerat placerat. Integer posuere arcu at elit convallis, sit amet fringilla turpis porta. Donec consectetur finibus volutpat. Integer sed semper quam, in egestas justo. Morbi arcu ipsum, vulputate id augue non, consequat ornare quam. Nam in magna a tellus auctor commodo. Etiam laoreet sapien lobortis vehicula eleifend. Sed eu lectus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'img' => 'P1140696.jpg',
            'category_id' => 6,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Lorem Ipsum',
            'body' => 'Suspendisse aliquet libero sit amet porttitor ultrices. Vivamus et neque interdum augue ultrices rutrum at ut lorem. Maecenas consectetur, dui ac pretium condimentum, libero lectus molestie leo, ultrices volutpat lorem velit sed tortor. Duis sed malesuada elit, id ultrices lacus. Aenean sed nibh elit. Maecenas ut libero elementum, hendrerit orci vitae, congue nisi. Etiam facilisis, magna sit amet porttitor laoreet, felis nisi cursus velit, nec venenatis nisi ex maximus mi. Donec scelerisque tristique convallis. Curabitur leo augue, ultricies vitae ultrices vel, dignissim id erat. Curabitur volutpat egestas nibh id aliquet. Fusce varius lacinia ligula, in rhoncus lectus sollicitudin tristique. Donec sollicitudin at nunc ut iaculis.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem id mattis condimentum. Etiam et eleifend sem, et commodo diam. Nullam a pretium augue, ac tincidunt odio. Nullam convallis aliquet nisi vitae dignissim. Phasellus ut pulvinar eros. Nam vitae scelerisque tellus, consectetur elementum eros. In porttitor libero eget sollicitudin tincidunt. Donec pretium, dolor ullamcorper tempus volutpat, purus ex porttitor augue, eu faucibus nisi mauris et turpis. Proin ultrices libero et elit scelerisque, ut convallis leo rutrum. Pellentesque bibendum mi id metus lacinia, sit amet accumsan arcu vestibulum. Aliquam erat volutpat. Suspendisse potenti.

Maecenas augue elit, maximus nec tellus eu, maximus porta felis. Nullam non aliquet ligula, id semper ex. Vivamus ultrices dignissim libero at pellentesque. Quisque porta consectetur condimentum. Vestibulum quis egestas est. Nulla ac arcu ut turpis tempus dapibus at et orci. Nullam convallis cursus diam, id tincidunt nisi facilisis nec. Nullam eu justo finibus, finibus sapien ac, congue libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis quis mi vel iaculis. Integer vitae tincidunt risus, ac convallis libero. Morbi facilisis lorem quis nisl tempor, nec vestibulum nisl dapibus. Proin commodo, sapien vel varius porta, turpis justo fermentum dolor, posuere pulvinar felis elit ut augue. Sed a ipsum nisi. Ut ipsum eros, vulputate ac eros eu, ultrices pretium lacus.

Sed mi leo, pharetra a nunc in, accumsan dictum lorem. Nulla in elit lorem. Curabitur ac odio ac mi congue rhoncus. Nam ac eleifend massa, at mollis felis. Fusce posuere lacus urna. Fusce in vehicula lorem. Vivamus consectetur magna vitae sem vehicula maximus. Ut accumsan magna eu mattis sollicitudin. Fusce nisl sem, viverra vel felis vel, pharetra blandit velit. Praesent at lectus fermentum, bibendum ante at, lacinia mauris. Phasellus vitae tincidunt dolor. Sed quis nibh ultrices, semper magna non, tristique massa. In eu urna a sapien gravida porttitor ut vitae nisl. Phasellus eget elit ultricies, commodo nisl nec, dictum arcu.

Nam sed risus nibh. Quisque nec ultrices diam. Etiam sapien magna, blandit in molestie ultricies, laoreet non turpis. Fusce et magna ut nunc porttitor faucibus. Praesent pellentesque rhoncus justo, non lacinia massa dictum in. Morbi pulvinar facilisis augue. Maecenas blandit tincidunt est vel porta.

Morbi vel ipsum a purus pulvinar fringilla at blandit ipsum. Maecenas volutpat elementum vestibulum. Cras tristique nisl quis tellus maximus, sit amet consequat ex dapibus. In molestie nibh vitae suscipit ornare. Fusce imperdiet nibh quis luctus cursus. Mauris mollis elit ullamcorper, rhoncus neque nec, egestas mi. Suspendisse potenti. Sed id lorem eros. Fusce felis augue, ullamcorper a euismod ac, eleifend quis magna. Praesent tempor, ex eu vestibulum euismod, dolor massa gravida risus, nec viverra quam ex eu quam. Sed sed libero iaculis, cursus nunc eget, viverra eros. Mauris blandit dictum venenatis. Nullam ultrices nulla lacus, et maximus dolor dignissim id.

Aenean eget sagittis eros. Etiam id blandit ipsum, sit amet tempus velit. Duis tempor auctor sagittis. Curabitur sit amet maximus neque. Quisque rhoncus mi ac maximus posuere. Fusce massa tellus, imperdiet nec euismod vitae, maximus eget nisl. Phasellus sit amet tortor sed metus blandit accumsan in sed tellus. Cras sagittis leo massa, nec consequat ante consectetur in. Ut id pharetra dui.

Nulla facilisi. Proin non pretium purus. Quisque ut molestie odio. Vestibulum semper elit nec lobortis bibendum. Nulla porta metus eu felis lacinia, in consectetur metus imperdiet. Curabitur id nisi sed ex porta ullamcorper. In non ex ac dolor fringilla cursus. Praesent accumsan augue quis rutrum sodales. Fusce quis lacus cursus, lobortis ipsum at, scelerisque leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec orci nisi, auctor vel eros sed, lacinia aliquam odio.',
            'img' => 'P1150555.JPG',
            'category_id' => 7,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        /*-------------------------------------------------------------*/
        /*-------------------------------------------------------------*/
        DB::table('articles')->insert([
            'user_id' => '8',
            'title' => 'Что такое Lorem Ipsum?',
            'body' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.',
            'img' => 'DSC07019.JPG',
            'category_id' => 7,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '9',
            'title' => 'Откуда он появился?',
            'body' => 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.',
            'img' => 'DSC01508.JPG',
            'category_id' => 6,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '9',
            'title' => 'Почему он используется?',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
            'img' => 'An158.JPG',
            'category_id' => 5,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Где его взять?',
            'body' => 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.',
            'img' => 'P1140714.jpg',
            'category_id' => 4,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Lorem Ipsum',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc vitae est porttitor iaculis at sed ipsum. Donec eu rutrum ipsum. Morbi ut venenatis lectus. Nullam blandit sed felis laoreet scelerisque. Curabitur tempus neque tellus, vitae vehicula quam bibendum nec. Maecenas dapibus lorem at lorem tincidunt, id gravida ex tincidunt. Maecenas nec leo maximus, congue libero porttitor, ultricies nunc. Aenean blandit consectetur eleifend. Duis luctus nisl ante, et volutpat arcu imperdiet ut. Etiam pellentesque dictum pharetra. Sed ut porttitor augue, a euismod sapien. Integer rutrum posuere consectetur.

Aenean tristique pharetra odio, et bibendum leo egestas non. Pellentesque feugiat risus sit amet facilisis volutpat. Curabitur tellus turpis, mattis id auctor eget, aliquam eu tortor. Praesent consectetur diam nisl, vel blandit nibh consectetur in. Donec scelerisque sem et libero ornare, quis mattis mauris condimentum. Nulla facilisi. Suspendisse sodales fermentum lacus, et ornare diam semper quis. Morbi tincidunt odio nec tellus faucibus, a aliquet tellus aliquam. Mauris nec ex non odio faucibus accumsan. Nullam in gravida arcu.

Aliquam hendrerit sed dolor commodo rhoncus. Quisque egestas, odio vel commodo semper, nulla magna sollicitudin dolor, quis ultrices augue nisi et odio. Nulla velit nibh, finibus sed metus sit amet, aliquam varius turpis. Curabitur scelerisque mauris quis urna volutpat dignissim. Vivamus tincidunt justo leo. Sed finibus, erat vel ullamcorper molestie, libero nisi finibus augue, ac euismod nisi velit quis nisi. Sed eu nibh ante. Nam venenatis sodales lorem, non ultricies libero lobortis eu. Vivamus dictum eu tortor et gravida. Praesent malesuada eros id eros gravida, sed congue tortor iaculis. Duis et orci condimentum, vulputate nibh sit amet, rutrum erat.

Maecenas ut eros enim. Mauris leo enim, laoreet vehicula sapien sed, elementum aliquam mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam elit metus, convallis sed est vitae, ornare finibus nisi. Nunc sapien felis, dignissim sit amet varius sed, cursus vitae mi. In viverra dictum mi non lobortis. Quisque non placerat massa, at ultricies orci. Duis id lacus nec nisi cursus convallis. Curabitur posuere sollicitudin dignissim. In euismod elit vel nulla pretium, sit amet consectetur erat accumsan. Pellentesque semper, ante at porttitor luctus, ligula libero molestie lorem, non tempus massa dolor ut elit. Nulla quis ante nec lacus ultrices bibendum vitae eget arcu. Cras dictum efficitur felis vitae vulputate. Quisque viverra turpis nibh, eget viverra tortor finibus sit amet. Etiam rhoncus eros nulla, at volutpat sapien lacinia ac. Curabitur et est erat.

Praesent ut ligula sed diam placerat placerat. Integer posuere arcu at elit convallis, sit amet fringilla turpis porta. Donec consectetur finibus volutpat. Integer sed semper quam, in egestas justo. Morbi arcu ipsum, vulputate id augue non, consequat ornare quam. Nam in magna a tellus auctor commodo. Etiam laoreet sapien lobortis vehicula eleifend. Sed eu lectus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'img' => 'P1140696.jpg',
            'category_id' => 3,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Lorem Ipsum',
            'body' => 'Suspendisse aliquet libero sit amet porttitor ultrices. Vivamus et neque interdum augue ultrices rutrum at ut lorem. Maecenas consectetur, dui ac pretium condimentum, libero lectus molestie leo, ultrices volutpat lorem velit sed tortor. Duis sed malesuada elit, id ultrices lacus. Aenean sed nibh elit. Maecenas ut libero elementum, hendrerit orci vitae, congue nisi. Etiam facilisis, magna sit amet porttitor laoreet, felis nisi cursus velit, nec venenatis nisi ex maximus mi. Donec scelerisque tristique convallis. Curabitur leo augue, ultricies vitae ultrices vel, dignissim id erat. Curabitur volutpat egestas nibh id aliquet. Fusce varius lacinia ligula, in rhoncus lectus sollicitudin tristique. Donec sollicitudin at nunc ut iaculis.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem id mattis condimentum. Etiam et eleifend sem, et commodo diam. Nullam a pretium augue, ac tincidunt odio. Nullam convallis aliquet nisi vitae dignissim. Phasellus ut pulvinar eros. Nam vitae scelerisque tellus, consectetur elementum eros. In porttitor libero eget sollicitudin tincidunt. Donec pretium, dolor ullamcorper tempus volutpat, purus ex porttitor augue, eu faucibus nisi mauris et turpis. Proin ultrices libero et elit scelerisque, ut convallis leo rutrum. Pellentesque bibendum mi id metus lacinia, sit amet accumsan arcu vestibulum. Aliquam erat volutpat. Suspendisse potenti.

Maecenas augue elit, maximus nec tellus eu, maximus porta felis. Nullam non aliquet ligula, id semper ex. Vivamus ultrices dignissim libero at pellentesque. Quisque porta consectetur condimentum. Vestibulum quis egestas est. Nulla ac arcu ut turpis tempus dapibus at et orci. Nullam convallis cursus diam, id tincidunt nisi facilisis nec. Nullam eu justo finibus, finibus sapien ac, congue libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis quis mi vel iaculis. Integer vitae tincidunt risus, ac convallis libero. Morbi facilisis lorem quis nisl tempor, nec vestibulum nisl dapibus. Proin commodo, sapien vel varius porta, turpis justo fermentum dolor, posuere pulvinar felis elit ut augue. Sed a ipsum nisi. Ut ipsum eros, vulputate ac eros eu, ultrices pretium lacus.

Sed mi leo, pharetra a nunc in, accumsan dictum lorem. Nulla in elit lorem. Curabitur ac odio ac mi congue rhoncus. Nam ac eleifend massa, at mollis felis. Fusce posuere lacus urna. Fusce in vehicula lorem. Vivamus consectetur magna vitae sem vehicula maximus. Ut accumsan magna eu mattis sollicitudin. Fusce nisl sem, viverra vel felis vel, pharetra blandit velit. Praesent at lectus fermentum, bibendum ante at, lacinia mauris. Phasellus vitae tincidunt dolor. Sed quis nibh ultrices, semper magna non, tristique massa. In eu urna a sapien gravida porttitor ut vitae nisl. Phasellus eget elit ultricies, commodo nisl nec, dictum arcu.

Nam sed risus nibh. Quisque nec ultrices diam. Etiam sapien magna, blandit in molestie ultricies, laoreet non turpis. Fusce et magna ut nunc porttitor faucibus. Praesent pellentesque rhoncus justo, non lacinia massa dictum in. Morbi pulvinar facilisis augue. Maecenas blandit tincidunt est vel porta.

Morbi vel ipsum a purus pulvinar fringilla at blandit ipsum. Maecenas volutpat elementum vestibulum. Cras tristique nisl quis tellus maximus, sit amet consequat ex dapibus. In molestie nibh vitae suscipit ornare. Fusce imperdiet nibh quis luctus cursus. Mauris mollis elit ullamcorper, rhoncus neque nec, egestas mi. Suspendisse potenti. Sed id lorem eros. Fusce felis augue, ullamcorper a euismod ac, eleifend quis magna. Praesent tempor, ex eu vestibulum euismod, dolor massa gravida risus, nec viverra quam ex eu quam. Sed sed libero iaculis, cursus nunc eget, viverra eros. Mauris blandit dictum venenatis. Nullam ultrices nulla lacus, et maximus dolor dignissim id.

Aenean eget sagittis eros. Etiam id blandit ipsum, sit amet tempus velit. Duis tempor auctor sagittis. Curabitur sit amet maximus neque. Quisque rhoncus mi ac maximus posuere. Fusce massa tellus, imperdiet nec euismod vitae, maximus eget nisl. Phasellus sit amet tortor sed metus blandit accumsan in sed tellus. Cras sagittis leo massa, nec consequat ante consectetur in. Ut id pharetra dui.

Nulla facilisi. Proin non pretium purus. Quisque ut molestie odio. Vestibulum semper elit nec lobortis bibendum. Nulla porta metus eu felis lacinia, in consectetur metus imperdiet. Curabitur id nisi sed ex porta ullamcorper. In non ex ac dolor fringilla cursus. Praesent accumsan augue quis rutrum sodales. Fusce quis lacus cursus, lobortis ipsum at, scelerisque leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec orci nisi, auctor vel eros sed, lacinia aliquam odio.',
            'img' => 'P1150555.JPG',
            'category_id' => 2,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        /*-------------------------------------------------------------*/
        /*-------------------------------------------------------------*/
        DB::table('articles')->insert([
            'user_id' => '8',
            'title' => 'Что такое Lorem Ipsum?',
            'body' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.',
            'img' => 'DSC07019.JPG',
            'category_id' => 2,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '7',
            'title' => 'Откуда он появился?',
            'body' => 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.',
            'img' => 'DSC01508.JPG',
            'category_id' => 1,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '9',
            'title' => 'Почему он используется?',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
            'img' => 'An158.JPG',
            'category_id' => 4,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Где его взять?',
            'body' => 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.',
            'img' => 'P1140714.jpg',
            'category_id' => 3,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Lorem Ipsum',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc vitae est porttitor iaculis at sed ipsum. Donec eu rutrum ipsum. Morbi ut venenatis lectus. Nullam blandit sed felis laoreet scelerisque. Curabitur tempus neque tellus, vitae vehicula quam bibendum nec. Maecenas dapibus lorem at lorem tincidunt, id gravida ex tincidunt. Maecenas nec leo maximus, congue libero porttitor, ultricies nunc. Aenean blandit consectetur eleifend. Duis luctus nisl ante, et volutpat arcu imperdiet ut. Etiam pellentesque dictum pharetra. Sed ut porttitor augue, a euismod sapien. Integer rutrum posuere consectetur.

Aenean tristique pharetra odio, et bibendum leo egestas non. Pellentesque feugiat risus sit amet facilisis volutpat. Curabitur tellus turpis, mattis id auctor eget, aliquam eu tortor. Praesent consectetur diam nisl, vel blandit nibh consectetur in. Donec scelerisque sem et libero ornare, quis mattis mauris condimentum. Nulla facilisi. Suspendisse sodales fermentum lacus, et ornare diam semper quis. Morbi tincidunt odio nec tellus faucibus, a aliquet tellus aliquam. Mauris nec ex non odio faucibus accumsan. Nullam in gravida arcu.

Aliquam hendrerit sed dolor commodo rhoncus. Quisque egestas, odio vel commodo semper, nulla magna sollicitudin dolor, quis ultrices augue nisi et odio. Nulla velit nibh, finibus sed metus sit amet, aliquam varius turpis. Curabitur scelerisque mauris quis urna volutpat dignissim. Vivamus tincidunt justo leo. Sed finibus, erat vel ullamcorper molestie, libero nisi finibus augue, ac euismod nisi velit quis nisi. Sed eu nibh ante. Nam venenatis sodales lorem, non ultricies libero lobortis eu. Vivamus dictum eu tortor et gravida. Praesent malesuada eros id eros gravida, sed congue tortor iaculis. Duis et orci condimentum, vulputate nibh sit amet, rutrum erat.

Maecenas ut eros enim. Mauris leo enim, laoreet vehicula sapien sed, elementum aliquam mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam elit metus, convallis sed est vitae, ornare finibus nisi. Nunc sapien felis, dignissim sit amet varius sed, cursus vitae mi. In viverra dictum mi non lobortis. Quisque non placerat massa, at ultricies orci. Duis id lacus nec nisi cursus convallis. Curabitur posuere sollicitudin dignissim. In euismod elit vel nulla pretium, sit amet consectetur erat accumsan. Pellentesque semper, ante at porttitor luctus, ligula libero molestie lorem, non tempus massa dolor ut elit. Nulla quis ante nec lacus ultrices bibendum vitae eget arcu. Cras dictum efficitur felis vitae vulputate. Quisque viverra turpis nibh, eget viverra tortor finibus sit amet. Etiam rhoncus eros nulla, at volutpat sapien lacinia ac. Curabitur et est erat.

Praesent ut ligula sed diam placerat placerat. Integer posuere arcu at elit convallis, sit amet fringilla turpis porta. Donec consectetur finibus volutpat. Integer sed semper quam, in egestas justo. Morbi arcu ipsum, vulputate id augue non, consequat ornare quam. Nam in magna a tellus auctor commodo. Etiam laoreet sapien lobortis vehicula eleifend. Sed eu lectus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'img' => 'P1140696.jpg',
            'category_id' => 3,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Lorem Ipsum',
            'body' => 'Suspendisse aliquet libero sit amet porttitor ultrices. Vivamus et neque interdum augue ultrices rutrum at ut lorem. Maecenas consectetur, dui ac pretium condimentum, libero lectus molestie leo, ultrices volutpat lorem velit sed tortor. Duis sed malesuada elit, id ultrices lacus. Aenean sed nibh elit. Maecenas ut libero elementum, hendrerit orci vitae, congue nisi. Etiam facilisis, magna sit amet porttitor laoreet, felis nisi cursus velit, nec venenatis nisi ex maximus mi. Donec scelerisque tristique convallis. Curabitur leo augue, ultricies vitae ultrices vel, dignissim id erat. Curabitur volutpat egestas nibh id aliquet. Fusce varius lacinia ligula, in rhoncus lectus sollicitudin tristique. Donec sollicitudin at nunc ut iaculis.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem id mattis condimentum. Etiam et eleifend sem, et commodo diam. Nullam a pretium augue, ac tincidunt odio. Nullam convallis aliquet nisi vitae dignissim. Phasellus ut pulvinar eros. Nam vitae scelerisque tellus, consectetur elementum eros. In porttitor libero eget sollicitudin tincidunt. Donec pretium, dolor ullamcorper tempus volutpat, purus ex porttitor augue, eu faucibus nisi mauris et turpis. Proin ultrices libero et elit scelerisque, ut convallis leo rutrum. Pellentesque bibendum mi id metus lacinia, sit amet accumsan arcu vestibulum. Aliquam erat volutpat. Suspendisse potenti.

Maecenas augue elit, maximus nec tellus eu, maximus porta felis. Nullam non aliquet ligula, id semper ex. Vivamus ultrices dignissim libero at pellentesque. Quisque porta consectetur condimentum. Vestibulum quis egestas est. Nulla ac arcu ut turpis tempus dapibus at et orci. Nullam convallis cursus diam, id tincidunt nisi facilisis nec. Nullam eu justo finibus, finibus sapien ac, congue libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis quis mi vel iaculis. Integer vitae tincidunt risus, ac convallis libero. Morbi facilisis lorem quis nisl tempor, nec vestibulum nisl dapibus. Proin commodo, sapien vel varius porta, turpis justo fermentum dolor, posuere pulvinar felis elit ut augue. Sed a ipsum nisi. Ut ipsum eros, vulputate ac eros eu, ultrices pretium lacus.

Sed mi leo, pharetra a nunc in, accumsan dictum lorem. Nulla in elit lorem. Curabitur ac odio ac mi congue rhoncus. Nam ac eleifend massa, at mollis felis. Fusce posuere lacus urna. Fusce in vehicula lorem. Vivamus consectetur magna vitae sem vehicula maximus. Ut accumsan magna eu mattis sollicitudin. Fusce nisl sem, viverra vel felis vel, pharetra blandit velit. Praesent at lectus fermentum, bibendum ante at, lacinia mauris. Phasellus vitae tincidunt dolor. Sed quis nibh ultrices, semper magna non, tristique massa. In eu urna a sapien gravida porttitor ut vitae nisl. Phasellus eget elit ultricies, commodo nisl nec, dictum arcu.

Nam sed risus nibh. Quisque nec ultrices diam. Etiam sapien magna, blandit in molestie ultricies, laoreet non turpis. Fusce et magna ut nunc porttitor faucibus. Praesent pellentesque rhoncus justo, non lacinia massa dictum in. Morbi pulvinar facilisis augue. Maecenas blandit tincidunt est vel porta.

Morbi vel ipsum a purus pulvinar fringilla at blandit ipsum. Maecenas volutpat elementum vestibulum. Cras tristique nisl quis tellus maximus, sit amet consequat ex dapibus. In molestie nibh vitae suscipit ornare. Fusce imperdiet nibh quis luctus cursus. Mauris mollis elit ullamcorper, rhoncus neque nec, egestas mi. Suspendisse potenti. Sed id lorem eros. Fusce felis augue, ullamcorper a euismod ac, eleifend quis magna. Praesent tempor, ex eu vestibulum euismod, dolor massa gravida risus, nec viverra quam ex eu quam. Sed sed libero iaculis, cursus nunc eget, viverra eros. Mauris blandit dictum venenatis. Nullam ultrices nulla lacus, et maximus dolor dignissim id.

Aenean eget sagittis eros. Etiam id blandit ipsum, sit amet tempus velit. Duis tempor auctor sagittis. Curabitur sit amet maximus neque. Quisque rhoncus mi ac maximus posuere. Fusce massa tellus, imperdiet nec euismod vitae, maximus eget nisl. Phasellus sit amet tortor sed metus blandit accumsan in sed tellus. Cras sagittis leo massa, nec consequat ante consectetur in. Ut id pharetra dui.

Nulla facilisi. Proin non pretium purus. Quisque ut molestie odio. Vestibulum semper elit nec lobortis bibendum. Nulla porta metus eu felis lacinia, in consectetur metus imperdiet. Curabitur id nisi sed ex porta ullamcorper. In non ex ac dolor fringilla cursus. Praesent accumsan augue quis rutrum sodales. Fusce quis lacus cursus, lobortis ipsum at, scelerisque leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec orci nisi, auctor vel eros sed, lacinia aliquam odio.',
            'img' => 'P1150555.JPG',
            'category_id' => 3,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        /*-------------------------------------------------------------*/
        /*-------------------------------------------------------------*/
        DB::table('articles')->insert([
            'user_id' => '8',
            'title' => 'Что такое Lorem Ipsum?',
            'body' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.',
            'img' => 'DSC07019.JPG',
            'category_id' => 1,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '9',
            'title' => 'Откуда он появился?',
            'body' => 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.',
            'img' => 'DSC01508.JPG',
            'category_id' => 5,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '9',
            'title' => 'Почему он используется?',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
            'img' => 'An158.JPG',
            'category_id' => 6,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Где его взять?',
            'body' => 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.',
            'img' => 'P1140714.jpg',
            'category_id' => 7,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Lorem Ipsum',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc vitae est porttitor iaculis at sed ipsum. Donec eu rutrum ipsum. Morbi ut venenatis lectus. Nullam blandit sed felis laoreet scelerisque. Curabitur tempus neque tellus, vitae vehicula quam bibendum nec. Maecenas dapibus lorem at lorem tincidunt, id gravida ex tincidunt. Maecenas nec leo maximus, congue libero porttitor, ultricies nunc. Aenean blandit consectetur eleifend. Duis luctus nisl ante, et volutpat arcu imperdiet ut. Etiam pellentesque dictum pharetra. Sed ut porttitor augue, a euismod sapien. Integer rutrum posuere consectetur.

Aenean tristique pharetra odio, et bibendum leo egestas non. Pellentesque feugiat risus sit amet facilisis volutpat. Curabitur tellus turpis, mattis id auctor eget, aliquam eu tortor. Praesent consectetur diam nisl, vel blandit nibh consectetur in. Donec scelerisque sem et libero ornare, quis mattis mauris condimentum. Nulla facilisi. Suspendisse sodales fermentum lacus, et ornare diam semper quis. Morbi tincidunt odio nec tellus faucibus, a aliquet tellus aliquam. Mauris nec ex non odio faucibus accumsan. Nullam in gravida arcu.

Aliquam hendrerit sed dolor commodo rhoncus. Quisque egestas, odio vel commodo semper, nulla magna sollicitudin dolor, quis ultrices augue nisi et odio. Nulla velit nibh, finibus sed metus sit amet, aliquam varius turpis. Curabitur scelerisque mauris quis urna volutpat dignissim. Vivamus tincidunt justo leo. Sed finibus, erat vel ullamcorper molestie, libero nisi finibus augue, ac euismod nisi velit quis nisi. Sed eu nibh ante. Nam venenatis sodales lorem, non ultricies libero lobortis eu. Vivamus dictum eu tortor et gravida. Praesent malesuada eros id eros gravida, sed congue tortor iaculis. Duis et orci condimentum, vulputate nibh sit amet, rutrum erat.

Maecenas ut eros enim. Mauris leo enim, laoreet vehicula sapien sed, elementum aliquam mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam elit metus, convallis sed est vitae, ornare finibus nisi. Nunc sapien felis, dignissim sit amet varius sed, cursus vitae mi. In viverra dictum mi non lobortis. Quisque non placerat massa, at ultricies orci. Duis id lacus nec nisi cursus convallis. Curabitur posuere sollicitudin dignissim. In euismod elit vel nulla pretium, sit amet consectetur erat accumsan. Pellentesque semper, ante at porttitor luctus, ligula libero molestie lorem, non tempus massa dolor ut elit. Nulla quis ante nec lacus ultrices bibendum vitae eget arcu. Cras dictum efficitur felis vitae vulputate. Quisque viverra turpis nibh, eget viverra tortor finibus sit amet. Etiam rhoncus eros nulla, at volutpat sapien lacinia ac. Curabitur et est erat.

Praesent ut ligula sed diam placerat placerat. Integer posuere arcu at elit convallis, sit amet fringilla turpis porta. Donec consectetur finibus volutpat. Integer sed semper quam, in egestas justo. Morbi arcu ipsum, vulputate id augue non, consequat ornare quam. Nam in magna a tellus auctor commodo. Etiam laoreet sapien lobortis vehicula eleifend. Sed eu lectus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'img' => 'P1140696.jpg',
            'category_id' => 5,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Lorem Ipsum',
            'body' => 'Suspendisse aliquet libero sit amet porttitor ultrices. Vivamus et neque interdum augue ultrices rutrum at ut lorem. Maecenas consectetur, dui ac pretium condimentum, libero lectus molestie leo, ultrices volutpat lorem velit sed tortor. Duis sed malesuada elit, id ultrices lacus. Aenean sed nibh elit. Maecenas ut libero elementum, hendrerit orci vitae, congue nisi. Etiam facilisis, magna sit amet porttitor laoreet, felis nisi cursus velit, nec venenatis nisi ex maximus mi. Donec scelerisque tristique convallis. Curabitur leo augue, ultricies vitae ultrices vel, dignissim id erat. Curabitur volutpat egestas nibh id aliquet. Fusce varius lacinia ligula, in rhoncus lectus sollicitudin tristique. Donec sollicitudin at nunc ut iaculis.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem id mattis condimentum. Etiam et eleifend sem, et commodo diam. Nullam a pretium augue, ac tincidunt odio. Nullam convallis aliquet nisi vitae dignissim. Phasellus ut pulvinar eros. Nam vitae scelerisque tellus, consectetur elementum eros. In porttitor libero eget sollicitudin tincidunt. Donec pretium, dolor ullamcorper tempus volutpat, purus ex porttitor augue, eu faucibus nisi mauris et turpis. Proin ultrices libero et elit scelerisque, ut convallis leo rutrum. Pellentesque bibendum mi id metus lacinia, sit amet accumsan arcu vestibulum. Aliquam erat volutpat. Suspendisse potenti.

Maecenas augue elit, maximus nec tellus eu, maximus porta felis. Nullam non aliquet ligula, id semper ex. Vivamus ultrices dignissim libero at pellentesque. Quisque porta consectetur condimentum. Vestibulum quis egestas est. Nulla ac arcu ut turpis tempus dapibus at et orci. Nullam convallis cursus diam, id tincidunt nisi facilisis nec. Nullam eu justo finibus, finibus sapien ac, congue libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis quis mi vel iaculis. Integer vitae tincidunt risus, ac convallis libero. Morbi facilisis lorem quis nisl tempor, nec vestibulum nisl dapibus. Proin commodo, sapien vel varius porta, turpis justo fermentum dolor, posuere pulvinar felis elit ut augue. Sed a ipsum nisi. Ut ipsum eros, vulputate ac eros eu, ultrices pretium lacus.

Sed mi leo, pharetra a nunc in, accumsan dictum lorem. Nulla in elit lorem. Curabitur ac odio ac mi congue rhoncus. Nam ac eleifend massa, at mollis felis. Fusce posuere lacus urna. Fusce in vehicula lorem. Vivamus consectetur magna vitae sem vehicula maximus. Ut accumsan magna eu mattis sollicitudin. Fusce nisl sem, viverra vel felis vel, pharetra blandit velit. Praesent at lectus fermentum, bibendum ante at, lacinia mauris. Phasellus vitae tincidunt dolor. Sed quis nibh ultrices, semper magna non, tristique massa. In eu urna a sapien gravida porttitor ut vitae nisl. Phasellus eget elit ultricies, commodo nisl nec, dictum arcu.

Nam sed risus nibh. Quisque nec ultrices diam. Etiam sapien magna, blandit in molestie ultricies, laoreet non turpis. Fusce et magna ut nunc porttitor faucibus. Praesent pellentesque rhoncus justo, non lacinia massa dictum in. Morbi pulvinar facilisis augue. Maecenas blandit tincidunt est vel porta.

Morbi vel ipsum a purus pulvinar fringilla at blandit ipsum. Maecenas volutpat elementum vestibulum. Cras tristique nisl quis tellus maximus, sit amet consequat ex dapibus. In molestie nibh vitae suscipit ornare. Fusce imperdiet nibh quis luctus cursus. Mauris mollis elit ullamcorper, rhoncus neque nec, egestas mi. Suspendisse potenti. Sed id lorem eros. Fusce felis augue, ullamcorper a euismod ac, eleifend quis magna. Praesent tempor, ex eu vestibulum euismod, dolor massa gravida risus, nec viverra quam ex eu quam. Sed sed libero iaculis, cursus nunc eget, viverra eros. Mauris blandit dictum venenatis. Nullam ultrices nulla lacus, et maximus dolor dignissim id.

Aenean eget sagittis eros. Etiam id blandit ipsum, sit amet tempus velit. Duis tempor auctor sagittis. Curabitur sit amet maximus neque. Quisque rhoncus mi ac maximus posuere. Fusce massa tellus, imperdiet nec euismod vitae, maximus eget nisl. Phasellus sit amet tortor sed metus blandit accumsan in sed tellus. Cras sagittis leo massa, nec consequat ante consectetur in. Ut id pharetra dui.

Nulla facilisi. Proin non pretium purus. Quisque ut molestie odio. Vestibulum semper elit nec lobortis bibendum. Nulla porta metus eu felis lacinia, in consectetur metus imperdiet. Curabitur id nisi sed ex porta ullamcorper. In non ex ac dolor fringilla cursus. Praesent accumsan augue quis rutrum sodales. Fusce quis lacus cursus, lobortis ipsum at, scelerisque leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec orci nisi, auctor vel eros sed, lacinia aliquam odio.',
            'img' => 'P1150555.JPG',
            'category_id' => 6,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        /*-------------------------------------------------------------*/
        /*-------------------------------------------------------------*/
        DB::table('articles')->insert([
            'user_id' => '8',
            'title' => 'Что такое Lorem Ipsum?',
            'body' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.',
            'img' => 'DSC07019.JPG',
            'category_id' => 6,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '9',
            'title' => 'Откуда он появился?',
            'body' => 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.',
            'img' => 'DSC01508.JPG',
            'category_id' => 5,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '9',
            'title' => 'Почему он используется?',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
            'img' => 'An158.JPG',
            'category_id' => 5,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Где его взять?',
            'body' => 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.',
            'img' => 'P1140714.jpg',
            'category_id' => 6,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Lorem Ipsum',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc vitae est porttitor iaculis at sed ipsum. Donec eu rutrum ipsum. Morbi ut venenatis lectus. Nullam blandit sed felis laoreet scelerisque. Curabitur tempus neque tellus, vitae vehicula quam bibendum nec. Maecenas dapibus lorem at lorem tincidunt, id gravida ex tincidunt. Maecenas nec leo maximus, congue libero porttitor, ultricies nunc. Aenean blandit consectetur eleifend. Duis luctus nisl ante, et volutpat arcu imperdiet ut. Etiam pellentesque dictum pharetra. Sed ut porttitor augue, a euismod sapien. Integer rutrum posuere consectetur.

Aenean tristique pharetra odio, et bibendum leo egestas non. Pellentesque feugiat risus sit amet facilisis volutpat. Curabitur tellus turpis, mattis id auctor eget, aliquam eu tortor. Praesent consectetur diam nisl, vel blandit nibh consectetur in. Donec scelerisque sem et libero ornare, quis mattis mauris condimentum. Nulla facilisi. Suspendisse sodales fermentum lacus, et ornare diam semper quis. Morbi tincidunt odio nec tellus faucibus, a aliquet tellus aliquam. Mauris nec ex non odio faucibus accumsan. Nullam in gravida arcu.

Aliquam hendrerit sed dolor commodo rhoncus. Quisque egestas, odio vel commodo semper, nulla magna sollicitudin dolor, quis ultrices augue nisi et odio. Nulla velit nibh, finibus sed metus sit amet, aliquam varius turpis. Curabitur scelerisque mauris quis urna volutpat dignissim. Vivamus tincidunt justo leo. Sed finibus, erat vel ullamcorper molestie, libero nisi finibus augue, ac euismod nisi velit quis nisi. Sed eu nibh ante. Nam venenatis sodales lorem, non ultricies libero lobortis eu. Vivamus dictum eu tortor et gravida. Praesent malesuada eros id eros gravida, sed congue tortor iaculis. Duis et orci condimentum, vulputate nibh sit amet, rutrum erat.

Maecenas ut eros enim. Mauris leo enim, laoreet vehicula sapien sed, elementum aliquam mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam elit metus, convallis sed est vitae, ornare finibus nisi. Nunc sapien felis, dignissim sit amet varius sed, cursus vitae mi. In viverra dictum mi non lobortis. Quisque non placerat massa, at ultricies orci. Duis id lacus nec nisi cursus convallis. Curabitur posuere sollicitudin dignissim. In euismod elit vel nulla pretium, sit amet consectetur erat accumsan. Pellentesque semper, ante at porttitor luctus, ligula libero molestie lorem, non tempus massa dolor ut elit. Nulla quis ante nec lacus ultrices bibendum vitae eget arcu. Cras dictum efficitur felis vitae vulputate. Quisque viverra turpis nibh, eget viverra tortor finibus sit amet. Etiam rhoncus eros nulla, at volutpat sapien lacinia ac. Curabitur et est erat.

Praesent ut ligula sed diam placerat placerat. Integer posuere arcu at elit convallis, sit amet fringilla turpis porta. Donec consectetur finibus volutpat. Integer sed semper quam, in egestas justo. Morbi arcu ipsum, vulputate id augue non, consequat ornare quam. Nam in magna a tellus auctor commodo. Etiam laoreet sapien lobortis vehicula eleifend. Sed eu lectus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'img' => 'P1140696.jpg',
            'category_id' => 4,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '7',
            'title' => 'Lorem Ipsum',
            'body' => 'Suspendisse aliquet libero sit amet porttitor ultrices. Vivamus et neque interdum augue ultrices rutrum at ut lorem. Maecenas consectetur, dui ac pretium condimentum, libero lectus molestie leo, ultrices volutpat lorem velit sed tortor. Duis sed malesuada elit, id ultrices lacus. Aenean sed nibh elit. Maecenas ut libero elementum, hendrerit orci vitae, congue nisi. Etiam facilisis, magna sit amet porttitor laoreet, felis nisi cursus velit, nec venenatis nisi ex maximus mi. Donec scelerisque tristique convallis. Curabitur leo augue, ultricies vitae ultrices vel, dignissim id erat. Curabitur volutpat egestas nibh id aliquet. Fusce varius lacinia ligula, in rhoncus lectus sollicitudin tristique. Donec sollicitudin at nunc ut iaculis.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem id mattis condimentum. Etiam et eleifend sem, et commodo diam. Nullam a pretium augue, ac tincidunt odio. Nullam convallis aliquet nisi vitae dignissim. Phasellus ut pulvinar eros. Nam vitae scelerisque tellus, consectetur elementum eros. In porttitor libero eget sollicitudin tincidunt. Donec pretium, dolor ullamcorper tempus volutpat, purus ex porttitor augue, eu faucibus nisi mauris et turpis. Proin ultrices libero et elit scelerisque, ut convallis leo rutrum. Pellentesque bibendum mi id metus lacinia, sit amet accumsan arcu vestibulum. Aliquam erat volutpat. Suspendisse potenti.

Maecenas augue elit, maximus nec tellus eu, maximus porta felis. Nullam non aliquet ligula, id semper ex. Vivamus ultrices dignissim libero at pellentesque. Quisque porta consectetur condimentum. Vestibulum quis egestas est. Nulla ac arcu ut turpis tempus dapibus at et orci. Nullam convallis cursus diam, id tincidunt nisi facilisis nec. Nullam eu justo finibus, finibus sapien ac, congue libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis quis mi vel iaculis. Integer vitae tincidunt risus, ac convallis libero. Morbi facilisis lorem quis nisl tempor, nec vestibulum nisl dapibus. Proin commodo, sapien vel varius porta, turpis justo fermentum dolor, posuere pulvinar felis elit ut augue. Sed a ipsum nisi. Ut ipsum eros, vulputate ac eros eu, ultrices pretium lacus.

Sed mi leo, pharetra a nunc in, accumsan dictum lorem. Nulla in elit lorem. Curabitur ac odio ac mi congue rhoncus. Nam ac eleifend massa, at mollis felis. Fusce posuere lacus urna. Fusce in vehicula lorem. Vivamus consectetur magna vitae sem vehicula maximus. Ut accumsan magna eu mattis sollicitudin. Fusce nisl sem, viverra vel felis vel, pharetra blandit velit. Praesent at lectus fermentum, bibendum ante at, lacinia mauris. Phasellus vitae tincidunt dolor. Sed quis nibh ultrices, semper magna non, tristique massa. In eu urna a sapien gravida porttitor ut vitae nisl. Phasellus eget elit ultricies, commodo nisl nec, dictum arcu.

Nam sed risus nibh. Quisque nec ultrices diam. Etiam sapien magna, blandit in molestie ultricies, laoreet non turpis. Fusce et magna ut nunc porttitor faucibus. Praesent pellentesque rhoncus justo, non lacinia massa dictum in. Morbi pulvinar facilisis augue. Maecenas blandit tincidunt est vel porta.

Morbi vel ipsum a purus pulvinar fringilla at blandit ipsum. Maecenas volutpat elementum vestibulum. Cras tristique nisl quis tellus maximus, sit amet consequat ex dapibus. In molestie nibh vitae suscipit ornare. Fusce imperdiet nibh quis luctus cursus. Mauris mollis elit ullamcorper, rhoncus neque nec, egestas mi. Suspendisse potenti. Sed id lorem eros. Fusce felis augue, ullamcorper a euismod ac, eleifend quis magna. Praesent tempor, ex eu vestibulum euismod, dolor massa gravida risus, nec viverra quam ex eu quam. Sed sed libero iaculis, cursus nunc eget, viverra eros. Mauris blandit dictum venenatis. Nullam ultrices nulla lacus, et maximus dolor dignissim id.

Aenean eget sagittis eros. Etiam id blandit ipsum, sit amet tempus velit. Duis tempor auctor sagittis. Curabitur sit amet maximus neque. Quisque rhoncus mi ac maximus posuere. Fusce massa tellus, imperdiet nec euismod vitae, maximus eget nisl. Phasellus sit amet tortor sed metus blandit accumsan in sed tellus. Cras sagittis leo massa, nec consequat ante consectetur in. Ut id pharetra dui.

Nulla facilisi. Proin non pretium purus. Quisque ut molestie odio. Vestibulum semper elit nec lobortis bibendum. Nulla porta metus eu felis lacinia, in consectetur metus imperdiet. Curabitur id nisi sed ex porta ullamcorper. In non ex ac dolor fringilla cursus. Praesent accumsan augue quis rutrum sodales. Fusce quis lacus cursus, lobortis ipsum at, scelerisque leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec orci nisi, auctor vel eros sed, lacinia aliquam odio.',
            'img' => 'P1150555.JPG',
            'category_id' => 2,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        /*-------------------------------------------------------------*/
        /*-------------------------------------------------------------*/
        DB::table('articles')->insert([
            'user_id' => '8',
            'title' => 'Что такое Lorem Ipsum?',
            'body' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.',
            'img' => 'DSC07019.JPG',
            'category_id' => 6,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '9',
            'title' => 'Откуда он появился?',
            'body' => 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32. Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.',
            'img' => 'DSC01508.JPG',
            'category_id' => 7,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '9',
            'title' => 'Почему он используется?',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
            'img' => 'An158.JPG',
            'category_id' => 5,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Где его взять?',
            'body' => 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.',
            'img' => 'P1140714.jpg',
            'category_id' => 3,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Lorem Ipsum',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nunc vitae est porttitor iaculis at sed ipsum. Donec eu rutrum ipsum. Morbi ut venenatis lectus. Nullam blandit sed felis laoreet scelerisque. Curabitur tempus neque tellus, vitae vehicula quam bibendum nec. Maecenas dapibus lorem at lorem tincidunt, id gravida ex tincidunt. Maecenas nec leo maximus, congue libero porttitor, ultricies nunc. Aenean blandit consectetur eleifend. Duis luctus nisl ante, et volutpat arcu imperdiet ut. Etiam pellentesque dictum pharetra. Sed ut porttitor augue, a euismod sapien. Integer rutrum posuere consectetur.

Aenean tristique pharetra odio, et bibendum leo egestas non. Pellentesque feugiat risus sit amet facilisis volutpat. Curabitur tellus turpis, mattis id auctor eget, aliquam eu tortor. Praesent consectetur diam nisl, vel blandit nibh consectetur in. Donec scelerisque sem et libero ornare, quis mattis mauris condimentum. Nulla facilisi. Suspendisse sodales fermentum lacus, et ornare diam semper quis. Morbi tincidunt odio nec tellus faucibus, a aliquet tellus aliquam. Mauris nec ex non odio faucibus accumsan. Nullam in gravida arcu.

Aliquam hendrerit sed dolor commodo rhoncus. Quisque egestas, odio vel commodo semper, nulla magna sollicitudin dolor, quis ultrices augue nisi et odio. Nulla velit nibh, finibus sed metus sit amet, aliquam varius turpis. Curabitur scelerisque mauris quis urna volutpat dignissim. Vivamus tincidunt justo leo. Sed finibus, erat vel ullamcorper molestie, libero nisi finibus augue, ac euismod nisi velit quis nisi. Sed eu nibh ante. Nam venenatis sodales lorem, non ultricies libero lobortis eu. Vivamus dictum eu tortor et gravida. Praesent malesuada eros id eros gravida, sed congue tortor iaculis. Duis et orci condimentum, vulputate nibh sit amet, rutrum erat.

Maecenas ut eros enim. Mauris leo enim, laoreet vehicula sapien sed, elementum aliquam mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam elit metus, convallis sed est vitae, ornare finibus nisi. Nunc sapien felis, dignissim sit amet varius sed, cursus vitae mi. In viverra dictum mi non lobortis. Quisque non placerat massa, at ultricies orci. Duis id lacus nec nisi cursus convallis. Curabitur posuere sollicitudin dignissim. In euismod elit vel nulla pretium, sit amet consectetur erat accumsan. Pellentesque semper, ante at porttitor luctus, ligula libero molestie lorem, non tempus massa dolor ut elit. Nulla quis ante nec lacus ultrices bibendum vitae eget arcu. Cras dictum efficitur felis vitae vulputate. Quisque viverra turpis nibh, eget viverra tortor finibus sit amet. Etiam rhoncus eros nulla, at volutpat sapien lacinia ac. Curabitur et est erat.

Praesent ut ligula sed diam placerat placerat. Integer posuere arcu at elit convallis, sit amet fringilla turpis porta. Donec consectetur finibus volutpat. Integer sed semper quam, in egestas justo. Morbi arcu ipsum, vulputate id augue non, consequat ornare quam. Nam in magna a tellus auctor commodo. Etiam laoreet sapien lobortis vehicula eleifend. Sed eu lectus neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'img' => 'P1140696.jpg',
            'category_id' => 2,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        DB::table('articles')->insert([
            'user_id' => '10',
            'title' => 'Lorem Ipsum',
            'body' => 'Suspendisse aliquet libero sit amet porttitor ultrices. Vivamus et neque interdum augue ultrices rutrum at ut lorem. Maecenas consectetur, dui ac pretium condimentum, libero lectus molestie leo, ultrices volutpat lorem velit sed tortor. Duis sed malesuada elit, id ultrices lacus. Aenean sed nibh elit. Maecenas ut libero elementum, hendrerit orci vitae, congue nisi. Etiam facilisis, magna sit amet porttitor laoreet, felis nisi cursus velit, nec venenatis nisi ex maximus mi. Donec scelerisque tristique convallis. Curabitur leo augue, ultricies vitae ultrices vel, dignissim id erat. Curabitur volutpat egestas nibh id aliquet. Fusce varius lacinia ligula, in rhoncus lectus sollicitudin tristique. Donec sollicitudin at nunc ut iaculis.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut bibendum sem id mattis condimentum. Etiam et eleifend sem, et commodo diam. Nullam a pretium augue, ac tincidunt odio. Nullam convallis aliquet nisi vitae dignissim. Phasellus ut pulvinar eros. Nam vitae scelerisque tellus, consectetur elementum eros. In porttitor libero eget sollicitudin tincidunt. Donec pretium, dolor ullamcorper tempus volutpat, purus ex porttitor augue, eu faucibus nisi mauris et turpis. Proin ultrices libero et elit scelerisque, ut convallis leo rutrum. Pellentesque bibendum mi id metus lacinia, sit amet accumsan arcu vestibulum. Aliquam erat volutpat. Suspendisse potenti.

Maecenas augue elit, maximus nec tellus eu, maximus porta felis. Nullam non aliquet ligula, id semper ex. Vivamus ultrices dignissim libero at pellentesque. Quisque porta consectetur condimentum. Vestibulum quis egestas est. Nulla ac arcu ut turpis tempus dapibus at et orci. Nullam convallis cursus diam, id tincidunt nisi facilisis nec. Nullam eu justo finibus, finibus sapien ac, congue libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis quis mi vel iaculis. Integer vitae tincidunt risus, ac convallis libero. Morbi facilisis lorem quis nisl tempor, nec vestibulum nisl dapibus. Proin commodo, sapien vel varius porta, turpis justo fermentum dolor, posuere pulvinar felis elit ut augue. Sed a ipsum nisi. Ut ipsum eros, vulputate ac eros eu, ultrices pretium lacus.

Sed mi leo, pharetra a nunc in, accumsan dictum lorem. Nulla in elit lorem. Curabitur ac odio ac mi congue rhoncus. Nam ac eleifend massa, at mollis felis. Fusce posuere lacus urna. Fusce in vehicula lorem. Vivamus consectetur magna vitae sem vehicula maximus. Ut accumsan magna eu mattis sollicitudin. Fusce nisl sem, viverra vel felis vel, pharetra blandit velit. Praesent at lectus fermentum, bibendum ante at, lacinia mauris. Phasellus vitae tincidunt dolor. Sed quis nibh ultrices, semper magna non, tristique massa. In eu urna a sapien gravida porttitor ut vitae nisl. Phasellus eget elit ultricies, commodo nisl nec, dictum arcu.

Nam sed risus nibh. Quisque nec ultrices diam. Etiam sapien magna, blandit in molestie ultricies, laoreet non turpis. Fusce et magna ut nunc porttitor faucibus. Praesent pellentesque rhoncus justo, non lacinia massa dictum in. Morbi pulvinar facilisis augue. Maecenas blandit tincidunt est vel porta.

Morbi vel ipsum a purus pulvinar fringilla at blandit ipsum. Maecenas volutpat elementum vestibulum. Cras tristique nisl quis tellus maximus, sit amet consequat ex dapibus. In molestie nibh vitae suscipit ornare. Fusce imperdiet nibh quis luctus cursus. Mauris mollis elit ullamcorper, rhoncus neque nec, egestas mi. Suspendisse potenti. Sed id lorem eros. Fusce felis augue, ullamcorper a euismod ac, eleifend quis magna. Praesent tempor, ex eu vestibulum euismod, dolor massa gravida risus, nec viverra quam ex eu quam. Sed sed libero iaculis, cursus nunc eget, viverra eros. Mauris blandit dictum venenatis. Nullam ultrices nulla lacus, et maximus dolor dignissim id.

Aenean eget sagittis eros. Etiam id blandit ipsum, sit amet tempus velit. Duis tempor auctor sagittis. Curabitur sit amet maximus neque. Quisque rhoncus mi ac maximus posuere. Fusce massa tellus, imperdiet nec euismod vitae, maximus eget nisl. Phasellus sit amet tortor sed metus blandit accumsan in sed tellus. Cras sagittis leo massa, nec consequat ante consectetur in. Ut id pharetra dui.

Nulla facilisi. Proin non pretium purus. Quisque ut molestie odio. Vestibulum semper elit nec lobortis bibendum. Nulla porta metus eu felis lacinia, in consectetur metus imperdiet. Curabitur id nisi sed ex porta ullamcorper. In non ex ac dolor fringilla cursus. Praesent accumsan augue quis rutrum sodales. Fusce quis lacus cursus, lobortis ipsum at, scelerisque leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec orci nisi, auctor vel eros sed, lacinia aliquam odio.',
            'img' => 'P1150555.JPG',
            'category_id' => 1,
            'published_at' => Carbon::now(),
            'created_at' => Carbon::yesterday(),
        ]);
        /*-------------------------------------------------------------*/
    }
}
