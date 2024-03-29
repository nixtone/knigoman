<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Данные
        $arData = [
            'user' => [
                [
                    'name' => "test1",
                    'email' => "test1@test.loc",
                    'password' => "test1",
                    'is_admin' => false,
                ],
                [
                    'name' => "test2",
                    'email' => "test2@test.loc",
                    'password' => "test2",
                    'is_admin' => true,
                ],

            ],
            'author' => [
                [
                    'name' => "Джек Лондон",
                    'birth_country' => "США",
                    'descr' => "американский писатель и журналист, военный корреспондент, общественный деятель, социалист. Наиболее известен как автор приключенческих рассказов и романов.",
                ],
                [
                    'name' => "Булгаков Михаил Афанасьевич",
                    'birth_country' => "Российская империя",
                    'descr' => "русский писатель советского периода, врач, драматург, театральный режиссёр и актёр.
Автор романов, повестей, рассказов, пьес, киносценариев и фельетонов, написанных в 1920-е годы.",
                ],
                [
                    'name' => "Пушкин Александр Сергеевич",
                    'birth_country' => "Российская империя",
                    'descr' => "Один из самых авторитетных литературных деятелей первой трети XIX века. Ещё при жизни Пушкина сложилась его репутация величайшего национального русского поэта. Пушкин рассматривается как основоположник современного русского литературного языка",
                ],
                [
                    'name' => "Азимов Айзек",
                    'birth_country' => "Смоленская губерния",
                    'descr' => "В одном из обращений к читателям Айзек Азимов следующим образом сформулировал гуманистическую роль научной фантастики в современном мире: «История достигла точки, когда человечеству больше не разрешается враждовать. Люди на Земле должны дружить. Я всегда старался это подчеркнуть в своих произведениях…",
                ],

            ],
            'category' => [
                [
                    'name' => "Романы",
                    'descr' => "Зародились в Средние века у романских народов, как рассказ на народном языке и ныне превратившийся в самый распространённый вид эпической литературы, изображающий жизнь персонажа с её волнующими страстями, борьбой, социальными противоречиями и стремлениями к идеалу.",
                ],
                [
                    'name' => "Драма",
                    'descr' => "Воспроизводит прежде всего внешний мир — взаимоотношения между людьми, их поступки, возникающие конфликты.",
                ],
                [
                    'name' => "Фантастика",
                    'descr' => "Литературовед и критик доктор филологических наук профессор Юлий Кагарлицкий отмечал, что одна из характерных особенностей научной фантастики — способность очень подчёркнуто выражать тенденции искусства своего времени: это обусловлено самой её природой.",
                ],

            ],

            'book' => [
                [
                    'name' => "Мартин Иден",
                    'publish_year' => 1909,
                    'descr' => "Действие романа происходит в начале XX века в Окленде (Калифорния, США). Мартин Иден — рабочий парень, моряк, выходец из низов, примерно 21 года от роду[4], случайно знакомится с Руфью Морз — девушкой из состоятельной буржуазной семьи. Влюбившись в неё с первого взгляда и попав под впечатление от высшего общества, Мартин, желая стать достойным Руфи, активно берётся за самообразование",
                    'author_id' => 1,
                    'category_id' => 1,
                    'user_id' => 1,
                ],
                [
                    'name' => "Мастер и Маргарита",
                    'publish_year' => 1966,
                    'descr' => "Действие романа начинается в один из майских дней, когда два московских литератора — председатель правления МАССОЛИТа Михаил Александрович Берлиоз и поэт Иван Бездомный — во время прогулки на Патриарших прудах встречают незнакомца, похожего на иностранца. Он включается в разговор об Иисусе Христе, рассказывает о своём пребывании на балконе прокуратора Иудеи Понтия Пилата и предрекает, что Берлиозу отрежет голову «русская женщина, комсомолка».",
                    'author_id' => 2,
                    'category_id' => 2,
                    'user_id' => 1,
                ],
                [
                    'name' => "Капитанская дочка",
                    'publish_year' => 1836,
                    'descr' => "На склоне лет помещик Пётр Андреевич Гринёв ведёт повествование о бурных событиях своей молодости. Детство своё он провёл в родительском поместье в Симбирской губернии, пока в 17 лет строгий отец, офицер в отставке, не распорядился отправить его служить в армию: «Полно ему бегать по девичьим да лазить на голубятни». ",
                    'author_id' => 3,
                    'category_id' => 1,
                    'user_id' => 1,
                ],
                [
                    'name' => "Евгений Онегин",
                    'publish_year' => 1833,
                    'descr' => "Александр Пушкин работал над этим романом на протяжении более чем семи лет. Работу над ним Пушкин называл подвигом — из всего своего творческого наследия только «Бориса Годунова» он характеризовал этим же словом. В произведении на широком фоне картин русской жизни показана драматическая судьба представителей русского дворянства первой четверти XIX века.",
                    'author_id' => 3,
                    'category_id' => 1,
                    'user_id' => 1,
                ],
                [
                    'name' => "Я, робот",
                    'publish_year' => 1950,
                    'descr' => "Сборник научно-фантастических рассказов Айзека Азимова, опубликованный в 1950 году американским издательством Gnome Press и оказавший большое влияние на современную научно-фантастическую литературу. В данном сборнике впервые были сформулированы Три закона роботехники.",
                    'author_id' => 4,
                    'category_id' => 3,
                    'user_id' => 2,
                ],
                [
                    'name' => "Академия на краю гибели",
                    'publish_year' => 1982,
                    'descr' => " Роман стал четвёртой частью цикла «Основание» и шестой в данной фантастической хронологии. Это первый роман Азимова, занесённый в список бестселлеров газеты «The New York Times». В 1983 году роман был удостоен премий «Хьюго» и «Локус» и был номинирован на премию Небьюла за 1982 год.",
                    'author_id' => 4,
                    'category_id' => 3,
                    'user_id' => 2,
                ],

            ],

        ];

        // Напихиваем данные
        foreach($arData['user'] as $user) User::factory()->create($user);
        foreach($arData['author'] as $author) Author::factory()->create($author);
        foreach($arData['category'] as $category) Category::factory()->create($category);
        foreach($arData['book'] as $book) Book::factory()->create($book);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
