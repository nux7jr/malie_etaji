<?php

namespace App\Content\main;

use Closure;
use App\Structures\Image;
use App\Structures\Pdf;
use Illuminate\Support\Collection;

class HousesInfo
{
  /**
   * Element use App\Structures\Image for build assets
   * @var Collection
   */
  public static Collection $card_elements;
  public function __construct()
  {
    self::$card_elements = collect([
      [
        'id' => 0,
        'name' => __('Барн 29-42'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/29-42/4-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/29-42/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/29-42/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/29-42/3-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'barns/29-42/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/29-42/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/29-42/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/29-42/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 919000,
        'price_end' => 1797000,
        'price_finish' => 3619000,
        'price_small' => __('от 0.9 млн ₽'),
        'item_info' => [
          'square' => 42,
          'floors' => 1,
          'bedrooms' => 1,
          'bathrooms' => 1,
          'ceiling' => '2,9м',
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '1 комната',
          'bathrooms' => '1 санузел',
        ],
        'about' => [
          __('Данный дом представляет из себя просторный барн-студию, общей площадью 42,4 кв.м., и имеет удобную Smart-планировку. Внутри барна выделены зоны для кухни-гостинной, зона отдыха, входная группа через большую террасу. Такая планировка обеспечивает максимальный комфорт и удобство жильцам, поскольку каждый её метр продуман до мелочей, что позволяет еще больше экономить место и увеличивать пространство.'),
          __('Дом также отличается большой крытой террасой, на которой можно наслаждаться свежим воздухом и красивым видом. Панорамное остекление создает свет и простор внутри дома, что придает ему современный вид.'),
          __('Этот дом идеально подходит для тех, кто ценит удобство и минимализм. В целом, это прекрасное место, где можно расслабиться, наслаждаться природой и проводить время с близкими.'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'barns/29-42/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/29-42/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/barns/29-42/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'barns/29-42/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'barns/29-42/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/barns/29-42/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/barn_style.jpg',
            ))->getSrc(),
            'text' => 'Стиль”Барн”'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/smart_layout.jpg',
            ))->getSrc(),
            'text' => 'Smart-планировка'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/spacious_studio.jpg',
            ))->getSrc(),
            'text' => 'Просторная студия'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/panoramic_windows.jpg',
            ))->getSrc(),
            'text' => 'Панорамные окна'
          ],
        ],
      ],
      [
        'id' => 1,
        'name' => __('Барн 53-56'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/53-56/4-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/53-56/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/53-56/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/53-56/3-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'barns/53-56/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/53-56/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/53-56/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/53-56/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1666000,
        'price_end' => 2729000,
        'price_finish' => 4803000,
        'price_small' => __('от 1.6 млн ₽'),
        'item_info' => [
          'square' => 56,
          'floors' => 1,
          'bedrooms' => 2,
          'bathrooms' => 1,
          'ceiling' => '3.8м',
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '2 комнаты',
          'bathrooms' => '1 санузел',
        ],
        'about' => [
          __('Дом имеет удобную входную группу с крыльцом и тамбуром. Проектом предусмотрена большая кухня-гостиная площадью 21 м², где можно в полной мере насладиться приятными моментами с семьей и друзьями.'),
          __('Высокие потолки в самой верхней точке - до 3,8 метров визуально расширят пространство. Панорамное остекление позволит в полной мере насладиться красивым видом из вашего окна.'),
          __('Барнхаус оснащен полноценной спальней 10 м² и компактным рабочим кабинетом, который при желании можно переоборудовать под детскую комнату. Но, это еще не все! Особенностью планировки является изолированное помещение, которое можно организовать под гардеробную или техническую комнату, что улучшает функциональность жилья.')
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'barns/53-56/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/53-56/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Кладовая', 'Терраса'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/barns/53-56/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'barns/53-56/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'barns/53-56/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/barns/53-56/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/entrance.jpg',
            ))->getSrc(),
            'text' => 'Входная группа-тамбур'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/high_ceilings.jpg',
            ))->getSrc(),
            'text' => 'Высокие потолки'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/panoramic_windows.jpg',
            ))->getSrc(),
            'text' => 'Панорамные окна'
          ],
        ],
      ],
      [
        'id' => 2,
        'name' => __('Барн 60-78'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/60-78/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/60-78/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/60-78/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/60-78/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'barns/60-78/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/60-78/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/60-78/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/60-78/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1799000,
        'price_end' => 2854000,
        'price_finish' => 5227000,
        'price_small' => __('от 1.8 млн ₽'),
        'item_info' => [
          'square' => 77,
          'floors' => 1,
          'bedrooms' => 3,
          'bathrooms' => 1,
          'ceiling' => '2,9м',
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '1 санузел',
        ],
        'about' => [
          __('ТОП-проект современного дома с террасой в стиле Барнхаус идеально подходит для тех, кто ценит комфорт и функциональность. Продуманная планировка дома состоит из просторной гостиной-кухни и двух комнат. Высокие потолки расширят пространство и дадут больше света. Прекрасная терраса станет уютным местом отдыха, позволит насладиться свежим воздухом и видом на природу.'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'barns/60-78/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/60-78/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Кладовая', 'Терраса'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/barns/60-78/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'barns/60-78/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'barns/60-78/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/barns/60-78/video1.mp4'
          ]
        ],

        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/entrance.jpg',
            ))->getSrc(),
            'text' => 'Входная группа-тамбур'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/high_ceilings.jpg',
            ))->getSrc(),
            'text' => 'Высокие потолки'
          ],
        ],
      ],
      [
        'id' => 3,
        'name' => __('Барн 62-67'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/62-67/4-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/3-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'barns/62-67/4.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/3.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1833000,
        'price_end' => 3000000,
        'price_finish' => 5107000,
        'price_small' => __('от 1.8 млн ₽'),
        'item_info' => [
          'square' => 67,
          'floors' => 1,
          'bedrooms' => 3,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Представляем проект современного дома-барнхауса, с панорамным остеклением и высокими потолками до 3,8 метров. Дом имеет две полноценные спальни и большую гостиную-кухню. Планировкой предусмотрено изолированное помещение, которое можно организовать под гардеробную или тех. комнату. Визитная карточка этого дома - просторная терраса, для полноценного отдыха и времяпровождения.'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'barns/62-67/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/barns/62-67/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'barns/62-67/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'barns/62-67/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/barns/62-67/video1.mp4'
          ]
        ],

        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/barn_style.jpg',
            ))->getSrc(),
            'text' => 'Стиль”Барн”'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/entrance.jpg',
            ))->getSrc(),
            'text' => 'Входная группа-тамбур'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/panoramic_windows.jpg',
            ))->getSrc(),
            'text' => 'Панорамные окна'
          ],
        ],
      ],
      [
        'id' => 4,
        'name' => __('Барн 63-76'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/63-76/4-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/3-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'barns/63-76/4.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/3.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1917000,
        'price_end' => 2123000,
        'price_finish' => 5400000,
        'price_small' => __('от 1.9 млн ₽'),
        'item_info' => [
          'square' => 76,
          'floors' => 1,
          'bedrooms' => 3,
          'bathrooms' => 1,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '1 санузел',
        ],
        'about' => [
          __('Данный проект дома привлекателен своей необычной формой и оптимальной эргономикой пространства. Вау-эффект создает линия крыши, которая повторяет контур панорамного окна. На террасе этого просторного барнхауса легко может поместиться полноценный обеденный стол. Внутри есть большая гостиная-кухня 22 м², и две полноценные изолированные комнаты'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'barns/63-76/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Кладовая'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/barns/63-76/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'barns/63-76/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'barns/63-76/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/barns/63-76/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/entrance.jpg',
            ))->getSrc(),
            'text' => 'Входная группа-тамбур'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/panoramic_windows.jpg',
            ))->getSrc(),
            'text' => 'Панорамные окна'
          ],
        ],
      ],
      [
        'id' => 5,
        'name' => __('Барн 75-90'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/75-90/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/75-90/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/75-90/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/75-90/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'barns/75-90/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/75-90/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/75-90/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/75-90/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 2260000,
        'price_end' => 3501000,
        'price_finish' => 5860000,
        'price_small' => __('от 2,2 млн ₽'),
        'item_info' => [
          'square' => 90,
          'floors' => 1,
          'bedrooms' => 3,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Этот проект обращает на себя особое внимание. Особая черта проекта - наличие двух санузлов и вместительной гардеробной. Также в планировке: большая гостиная-кухня и тамбур. Просторная терраса станет идеальным местом для утреннего кофе с любимой книгой, а вечером -  позволит принимать гостей без ограничений.'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'barns/75-90/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/75-90/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/barns/75-90/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'barns/75-90/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'barns/75-90/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/barns/75-90/video1.mp4'
          ]
        ],

        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/entrance.jpg',
            ))->getSrc(),
            'text' => 'Входная группа-тамбур'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/several_bathrooms.jpg',
            ))->getSrc(),
            'text' => 'Несколько санузлов'
          ],
        ],
      ],
      [
        'id' => 6,
        'name' => __('Барн 86-102'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/86-102/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/86-102/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/86-102/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/86-102/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'barns/86-102/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/86-102/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/86-102/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/86-102/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 2469000,
        'price_end' => 3724000,
        'price_finish' => 6393000,
        'price_small' => __('от 2,4 млн ₽'),
        'item_info' => [
          'square' => 102,
          'floors' => 1,
          'bedrooms' => 4,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Современный минималистичный дизайн и простор - ключевые черты данного проекта. Барнхаус 86-102 - оптимальный выбор, если в приоритете - функционал и большая площадь жилья. Дом обладает тремя изолированными спальнями, одну из которых по желанию можно оборудовать под кабинет или детскую. Не оставят равнодушными - большая гостиная-кухня и наличие кладовой. Для максимального удобства спроектированы два санузла. На заднем дворе располагается большая крытая терраса'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'barns/86-102/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/86-102/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/barns/86-102/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'barns/86-102/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'barns/86-102/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/barns/86-102/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/kitchen_dining_room.jpg',
            ))->getSrc(),
            'text' => 'Кухня-столовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/several_bathrooms.jpg',
            ))->getSrc(),
            'text' => 'Несколько санузлов'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/entrance.jpg',
            ))->getSrc(),
            'text' => 'Входная группа-тамбур'
          ],
        ],
      ],
      [
        'id' => 7,
        'name' => __('Барн 87-110'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/87-110/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/4-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/2-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'barns/87-110/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/4.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/2.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 2704000,
        'price_end' => 3913000,
        'price_finish' => 6675000,
        'price_small' => __('от 2,7 млн ₽'),
        'item_info' => [
          'square' => 110,
          'floors' => 1,
          'bedrooms' => 3,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Проект барнхауса 87-110 сочетает в себе функциональность и нестандартную архитектуру. Проект выделяется динамичной геометрией фасада, которая не оставит никого равнодушным. В вашем распоряжении большая гостиная-кухня и 2 отдельные комнаты. Абсолютный комфорт обеспечивают два санузла и отдельное тех. помещение, под хранение, гардеробную или прачечную. Большая крытая терраса идеально подойдет для отдыха на свежем воздухе, или станет летней кухней'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'barns/87-110/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Гардеробная'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/barns/87-110/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'barns/87-110/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'barns/87-110/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/barns/87-110/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/several_bathrooms.jpg',
            ))->getSrc(),
            'text' => 'Несколько санузлов'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/entrance.jpg',
            ))->getSrc(),
            'text' => 'Входная группа-тамбур'
          ],
        ],
      ],
      [
        'id' => 8,
        'name' => __('ДВ 112-141'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/112-141/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/112-141/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/112-141/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/112-141/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'double/112-141/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/112-141/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/112-141/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/112-141/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 2651000,
        'price_end' => 4643000,
        'price_finish' => 7861000,
        'price_small' => __('от 2,6 млн ₽'),
        'item_info' => [
          'square' => 111,
          'floors' => 2,
          'bedrooms' => 6,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '6 комнат',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Один из самых больших проектов в линейке двухэтажных домов. Оптимальная смарт-планировка продумана до мелочей. Дом отличает 5 полноценных спален и удобная гостиная-кухня. На каждом этаже дома присутствует санузел. Кроме того, для вашего удобства в планировку включен тамбур и.отдельное тех. помещение на первом этаже, куда можно спрятать любые вещи или обустроить прачечную. Теплые летние вечера здорово будет проводить на уютном балконе или отдыхать на просторной террасе. '),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'double/112-141/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/112-141/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Кабинет'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/double/112-141/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'double/112-141/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'double/112-141/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/double/112-141/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/balcony.jpg',
            ))->getSrc(),
            'text' => 'Балкон'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/several_bathrooms.jpg',
            ))->getSrc(),
            'text' => 'Несколько санузлов'
          ],
        ],

      ],
      [
        'id' => 9,
        'name' => __('ДВ 123-160'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/123-160/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'double/123-160/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 2914000,
        'price_end' => 5041000,
        'price_finish' => 8686000,
        'price_small' => __('от 2,9 млн ₽'),
        'item_info' => [
          'square' => 112,
          'floors' => 2,
          'bedrooms' => 5,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '5 комнат',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Второй по величине проект из нашей линейки двухэтажных домов. Его отличает большой эркер с панорамными окнами в два этажа. Эркерная часть дома является “вторым светом” с высотой остекления более 6 м. По архитектурной задумке, линии переплетов окон гармонично повторяют абрис кровли. Панорамные витражи наполняют дом светом и создают особую атмосферу. На первом этаже располагается гостиная, спальня и отдельная кухня-столовая, которая ведет на просторную угловую террасу. Кроме того, для максимального удобства предусмотрено тех. помещение, два крыльца и тамбур. На втором этаже находится три полноценных спальни. '),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'double/123-160/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Балкон'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/double/123-160/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'double/123-160/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'double/123-160/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/double/123-160/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/kitchen_dining_room.jpg',
            ))->getSrc(),
            'text' => 'Кухня-столовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/terrase.jpg',
            ))->getSrc(),
            'text' => 'Терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/second_light.jpg',
            ))->getSrc(),
            'text' => 'Второй свет'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/balcony.jpg',
            ))->getSrc(),
            'text' => 'Балкон'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
        ],
      ],
      [
        'id' => 10,
        'name' => __('ДВ 136-165'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/136-165/4-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/3-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'double/136-165/4.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/3.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 3270000,
        'price_end' => 5481000,
        'price_finish' => 9027000,
        'price_small' => __('от 3.2 млн ₽'),
        'item_info' => [
          'square' => 135,
          'floors' => 2,
          'bedrooms' => 4,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '4 комнаты',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Самый большой по площади дом из линейки двухэтажных домов. Безусловное преимущество этого дома - прилегающий гараж с автоматическими воротами на один автомобиль.'), __('На первом этаже располагается вместительная кухня-гостиная, одна спальня и холл. Кроме того, есть отдельное тех. помещение, для хранения вещей или прачечной. На втором этаже располагаются три основных и одна дополнительная спальня, или кабинет, ведущий на уютный балкон. Просторная терраса, выходящая на задний двор - идеальное место для проведения вечеров с друзьями и семьей. Дом 136-165 - идеальный выбор для тех, кто ищет качество и комфорт.'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'double/123-160/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Гараж', 'Терраса', 'Кабинет'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/double/123-160/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'double/123-160/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'double/123-160/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/double/123-160/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/garage.jpg',
            ))->getSrc(),
            'text' => 'Гараж'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/balcony.jpg',
            ))->getSrc(),
            'text' => 'Балкон'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
        ],
      ],
      [
        'id' => 11,
        'name' => __('ДВ 136-165-2'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/136-165-2/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165-2/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165-2/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165-2/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'double/136-165-2/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165-2/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165-2/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165-2/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 3270000,
        'price_end' => 5481000,
        'price_finish' => 9027000,
        'price_small' => __('от 3.2 млн ₽'),
        'item_info' => [
          'square' => 135,
          'floors' => 2,
          'bedrooms' => 4,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '4 комнаты',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Самый большой по площади дом из линейки двухэтажных домов.  Безусловное преимущество этого дома - прилегающий гараж с автоматическими воротами на один автомобиль. На первом этаже располагается вместительная кухня-гостиная, одна спальня и холл. Кроме того, есть отдельное тех. помещение, для хранения вещей или прачечной. На втором этаже располагаются три основных и одна дополнительная спальня, или кабинет, ведущий на уютный балкон. Просторная терраса, выходящая на задний двор - идеальное место для проведения вечеров с друзьями и семьей. Дом 136-165 - идеальный выбор для тех, кто ищет качество и комфорт.'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'double/136-165-2/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165-2/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Гараж', 'Терраса', 'Кладовая', 'Балкон'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/double/136-165-2/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'double/136-165-2/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'double/136-165-2/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/double/136-165-2/video1.mp4'
          ]
        ],

        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/garage.jpg',
            ))->getSrc(),
            'text' => 'Гараж'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/balcony.jpg',
            ))->getSrc(),
            'text' => 'Балкон'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
        ],
      ],
      [
        'id' => 12,
        'name' => __('ДВ 72-92'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/72-92/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/72-92/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/72-92/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/72-92/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'double/72-92/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/72-92/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/72-92/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/72-92/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1880000,
        'price_end' => 3262000,
        'price_finish' => 6173000,
        'price_small' => __('от 1.8 млн ₽'),
        'item_info' => [
          'square' => 72,
          'floors' => 2,
          'bedrooms' => 3,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Компактный, и в то же время просторный дом в лаконичном дизайне. У вас всегда будет место для гостей в просторной кухне-гостиной на первом этаже, которая станет центром вечерних посиделок. На втором этаже расположены две полноценные спальни и гардероб.  Вас порадует уютный балкон и терраса, где вы можете наслаждаться утренним кофе или читать книгу вечером.'),
          __('На каждом этаже дома присутствует санузел. Кроме того, для вашего удобства в планировку включен тамбур. Наши конструкторы позаботились о максимальной эргономике пространства. Здесь вы найдете все необходимое для комфортной жизни.')
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'double/72-92/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/72-92/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Гардеробная', 'Гараж', 'Балкон'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/double/72-92/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'double/72-92/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'double/72-92/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/double/72-92/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/balcony.jpg',
            ))->getSrc(),
            'text' => 'Балкон'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/gard.jpg',
            ))->getSrc(),
            'text' => 'Гардеробная'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/several_bathrooms.jpg',
            ))->getSrc(),
            'text' => 'Несколько санузлов'
          ],
        ],
      ],
      [
        'id' => 13,
        'name' => __('ДВ 75-92'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/75-92/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/75-92/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/75-92/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/75-92/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'double/75-92/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/75-92/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/75-92/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/75-92/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1943000,
        'price_end' => 3442000,
        'price_finish' => 6481000,
        'price_small' => __('от 1.9 млн ₽'),
        'item_info' => [
          'square' => 72,
          'floors' => 2,
          'bedrooms' => 3,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Еще один компактный проект двухэтажного дома из нашей линейки. Оптимальное планировочное решение позволит создать ощущение простора. Сердце дома - большая гостиная кухня 22 м² с выходом на крытую террасу. Немаловажно наличие тех.комнаты возле кухни, что разгрузит пространство и спрячет все необходимое. На каждом этаже дома присутствует санузел.'),
          __('На втором этаже, в вашем распоряжении будут две полноценные спальни, гардеробная и холл с выходом на балкон.')
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'double/75-92/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/75-92/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Гардеробная', 'Кладовая', 'Балкон'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/double/75-92/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'double/75-92/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'double/75-92/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/double/75-92/video1.mp4'
          ]
        ],


        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/gard.jpg',
            ))->getSrc(),
            'text' => 'Гардеробная'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/balcony.jpg',
            ))->getSrc(),
            'text' => 'Балкон'
          ],
        ],

      ],
      [
        'id' => 14,
        'name' => __('ДВ 80-93'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/80-93/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/80-93/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/80-93/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/80-93/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'double/80-93/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/80-93/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/80-93/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/80-93/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 2024000,
        'price_end' => 3394000,
        'price_finish' => 6513000,
        'price_small' => __('от 2 млн ₽'),
        'item_info' => [
          'square' => 80,
          'floors' => 2,
          'bedrooms' => 3,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Дизайн этого дома идеально сочетает в себе функциональность и минимализм. Удобная Smart-планировка предполагает не только все основные помещения, но и просторную входную группу-тамбур и техническое помещение для хранения. На первом этаже располагается  гостиная-кухня, одна изолированная спальня, просторный холл. Гостиная-кухня имеет площадь 23 м² и выходит на большую крытую террасу. Второй этаж располагает крупной и компактной спальней, которая идеально подойдет для детской или кабинета. Помимо этого, есть вместительный гардероб в холле. Особое вниманием к деталям, обеспечит максимальный уровень удобства.'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'double/80-93/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/80-93/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Гардеробная', 'Кладовая'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/double/80-93/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'double/80-93/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'double/80-93/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/double/80-93/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/several_bathrooms.jpg',
            ))->getSrc(),
            'text' => 'Несколько санузлов'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/gard.jpg',
            ))->getSrc(),
            'text' => 'Гардеробная'
          ],
        ],

      ],
      [
        'id' => 15,
        'name' => __('ДВ 98-115'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/98-115/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/98-115/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/98-115/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/98-115/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'double/98-115/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/98-115/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/98-115/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/98-115/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1920000,
        'price_end' => 2845000,
        'price_finish' => 5252000,
        'price_small' => __('от 2 млн ₽'),
        'item_info' => [
          'square' => 97,
          'floors' => 2,
          'bedrooms' => 5,
          'bathrooms' => 2,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '5 комнат',
          'bathrooms' => '2 санузла',
        ],
        'about' => [
          __('Этот проект имеет все преимущества для комфортной жизни большой семьи. Просторная гостиная-кухня на 1 этаже ведет на большую крытую террасу, которая в летнее время прекрасно подходит для проведения барбекю или отдыха. В доме спроектировано два входа: с террасы и с противоположной стороны - через крыльцо и тамбур. Предусмотрены два санузла на каждом этаже, что позволит избежать любых неудобств. '),
          __('На втором этаже есть три полноценные спальни. Безупречная эргономика и высокое качество отделки - делают проект привлекательным. Не упустите шанс приобрести свою мечту.'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'double/98-115/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/98-115/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Кладовая'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/double/98-115/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'double/98-115/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'double/98-115/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/double/98-115/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/entrance.jpg',
            ))->getSrc(),
            'text' => 'Входная группа-тамбур'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/several_bathrooms.jpg',
            ))->getSrc(),
            'text' => 'Несколько санузлов'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
        ],

      ],
      // new
      [
        'id' => 16,
        'name' => __('ОД 65-77'),
        'category' => __('Одноэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'single/65-77/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/65-77/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/65-77/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/65-77/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'single/65-77/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/65-77/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/65-77/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/65-77/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1920000,
        'price_end' => 2845000,
        'price_finish' => 5252000,
        'price_small' => __('от 2 млн ₽'),
        'item_info' => [
          'square' => 77,
          'floors' => 1,
          'bedrooms' => 3,
          'bathrooms' => 1,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '1 санузл',
        ],
        'about' => [
          __('Этот проект одноэтажного дома сочетает в себе функциональность и современный вид. Дизайн дома выдержан в современном стиле с использованием простых линий и минималистической эстетики.'),
          __('Отличительная черта проекта – плоская кровля, которую в дальнейшем вы можете эксплуатировать.'),
          __('Проект включает в себя просторную гостиную-кухню 29 м² и две просторных спальни. Дополнительный бонус - компактная терраса.  Кроме того, есть отдельное тех. помещение, где можно спрятать вещи для хранения.'),

        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'single/65-77/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/65-77/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Кладовая'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/single/65-77/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'single/65-77/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'single/65-77/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/single/65-77/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/entrance.jpg',
            ))->getSrc(),
            'text' => 'Входная группа-тамбур'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/flat_roof.jpg',
            ))->getSrc(),
            'text' => 'Плоская кровля'
          ],
        ],

      ],
      [
        'id' => 17,
        'name' => __('ОД 69-81'),
        'category' => __('Одноэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'single/69-81/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/69-81/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/69-81/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/69-81/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'single/69-81/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/69-81/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/69-81/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/69-81/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1868000,
        'price_end' => 2881000,
        'price_finish' => 5351000,
        'price_small' => __('от 1.8 млн ₽'),
        'item_info' => [
          'square' => 80,
          'floors' => 1,
          'bedrooms' => 2,
          'bathrooms' => 1,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '2 комнаты',
          'bathrooms' => '1 санузл',
        ],
        'about' => [
          __('Проект ОД 69-81 - идеальный одноэтажный дом из нашей линейки. Он отличается функциональностью и современным стилем.'),
          __('В вашем распоряжении две полноценные спальни, одна из которых имеет собственную гардеробную. Просторная светлая гостиная-кухня 23 м² с большим панорамным окном в пол, ведет на крытую террасу. Кроме того, эргономика планировки отличается просторной входной группой с холлом.'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'single/69-81/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/69-81/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Кладовая'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/single/69-81/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'single/69-81/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'single/69-81/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/single/69-81/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/gard.jpg',
            ))->getSrc(),
            'text' => 'Гардеробная'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/entrance.jpg',
            ))->getSrc(),
            'text' => 'Входная группа-тамбур'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/panoramic_windows.jpg',
            ))->getSrc(),
            'text' => 'Панорамные окна'
          ],
        ],

      ],
      [
        'id' => 18,
        'name' => __('ОД 79-101'),
        'category' => __('Одноэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'single/79-101/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/79-101/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/79-101/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/79-101/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'single/79-101/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/79-101/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/79-101/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/79-101/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 2239000,
        'price_end' => 3720000,
        'price_finish' => 6486000,
        'price_small' => __('от 2.2 млн ₽'),
        'item_info' => [
          'square' => 101,
          'floors' => 1,
          'bedrooms' => 3,
          'bathrooms' => 1,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '1 санузл',
        ],
        'about' => [
          __('Эксклюзивный проект в лучших традициях швейцарского стиля  «Шале» - что в переводе означает «хижина пастуха». Это дома, которые возводились в прежние времена в Альпах. Экологичность и применение натуральных материалов – отличительная черта этого стиля. “Альпийские домики” ценятся за изысканный  внешний вид, естественное освещение, отличную теплоизоляцию, покатую крышу с большим углом. Она спроектирована, чтобы осадки скатывались с нее самостоятельно. Большие, панорамные окна – норма для такого здания. Они помогают буквально заливать дом светом. Здание благодаря такому решению отчасти сливается с окружающим пейзажем, а в комнатах очень светло. Продуманный вариант планировки, позволяет перемещаться в плоскости одного этажа и не возводить лестничную конструкцию, экономя много полезной площади. Так, гостиная-кухня занимает целых 34 м², выход которой ведет на просторную террасу'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'single/79-101/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/79-101/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Кладовая', 'Гардеробная'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/single/79-101/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'single/79-101/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'single/79-101/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/single/79-101/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/chalet_style.jpg',
            ))->getSrc(),
            'text' => 'Стиль”Шале”'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/gard.jpg',
            ))->getSrc(),
            'text' => 'Гардеробная'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/panoramic_windows.jpg',
            ))->getSrc(),
            'text' => 'Панорамные окна'
          ],
        ],
      ],
      [
        'id' => 19,
        'name' => __('ОД 83-109'),
        'category' => __('Одноэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'single/83-109/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/83-109/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/83-109/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/83-109/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'single/83-109/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/83-109/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/83-109/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/83-109/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 6050000,
        'price_end' => 6050000,
        'price_finish' => 6050000,
        'price_small' => __('от 55000 за м²'),
        'item_info' => [
          'square' => 109,
          'floors' => 1,
          'bedrooms' => 3,
          'bathrooms' => 1,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '1 санузл',
        ],
        'about' => [
          __('Этот одноэтажный дом - идеальный выбор для тех, кто ценит функциональность и простор. Большая гостиная-кухня с панорамными окнами является главным пространством дома, ее площадь составляет 35 м². Гостиная ведет на большую крытую террасу. В вашем распоряжении будут 2 комнаты/спальни, одна из которых совмещена с гардеробной. Наличие технического помещения для хранения - еще один плюс проекта. Здесь есть все, чтобы создать идеальное пространство для жизни, работы и отдыха. '),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'single/83-109/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/83-109/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Кладовая', 'Гардеробная'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/single/83-109/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'single/83-109/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'single/83-109/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/single/83-109/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостинная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/gard.jpg',
            ))->getSrc(),
            'text' => 'Гардеробная'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/panoramic_windows.jpg',
            ))->getSrc(),
            'text' => 'Панорамные окна'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
        ],
      ],
      [
        'id' => 20,
        'name' => __('ОД 92-112'),
        'category' => __('Одноэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'single/92-112/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/92-112/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/92-112/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/92-112/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'single/92-112/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/92-112/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/92-112/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/92-112/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 2414000,
        'price_end' => 3846000,
        'price_finish' => 6725000,
        'price_small' => __('от 2.4 млн ₽'),
        'item_info' => [
          'square' => 112,
          'floors' => 1,
          'bedrooms' => 4,
          'bathrooms' => 1,
          'unit' => 'кв. м',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '4 комнаты',
          'bathrooms' => '1 санузл',
        ],
        'about' => [
          __('Проект этого одноэтажного дома идеально сочетает в себе функциональность и современный стиль. Большая гостиная-кухня площадью 37 м², выходящая на просторную террасу, станет идеальным местом для вечерних посиделок и шумных торжеств. Также в вашем распоряжении 3 отдельных комнаты/спальни.'),
          __('Специальные ниши в комнатах позволят разместить габаритную  мебель, например, кровать-трансформер. В дополнение, вас порадует наличие гардеробной и кладовой комнаты.'),
        ],
        'download' => '/someurl',
        'about_images' => [
          (new Image(
            src: 'single/92-112/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'single/92-112/6.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса', 'Кладовая', 'Гардеробная'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/single/92-112/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'single/92-112/5-facade.jpg',
            ))->getSrc(),
            (new Image(
              src: 'single/92-112/6-facade.jpg',
            ))->getSrc()
          ],
          '3d' => [
            '/video/single/92-112/video1.mp4'
          ]
        ],
        'peculiarities' => [
          [
            'img' => (new Image(
              src: 'peculiarities_projects/living_room-kitchen.jpg',
            ))->getSrc(),
            'text' => 'Гостиная-кухня'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/storeroom.png',
            ))->getSrc(),
            'text' => 'Кладовая'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/gard.jpg',
            ))->getSrc(),
            'text' => 'Гардеробная'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/covered_terrace.jpg',
            ))->getSrc(),
            'text' => 'Крытая терраса'
          ],
          [
            'img' => (new Image(
              src: 'peculiarities_projects/entrance.jpg',
            ))->getSrc(),
            'text' => 'Входная группа-тамбур'
          ],
        ],
      ],
    ]);
  }

  /**
   * @param int $id
   * @return Closure|null
   */
  public static function getItemById(int $id): Closure|array|string
  {
    return self::$card_elements->get($id)  ?? "{\"status\":\"error\",\"code\":\"404\",\"message\":\"house with id: $id undefined\"}";
  }
  /**
   * @param array $settings
   * @return array|null
   */
  public static function filter(array $settings): ?array
  {
    return self::$card_elements->filter(function ($element) use ($settings) {
      $filtered =
        ($settings['house-list'] === $element['category'] ||
          $settings['house-list'] === 'Все' ||
          $settings['house-list'] === 'Не выбрано') &&
        $element['price_kit'] >= self::strToMillion($settings['price-start']) &&
        $element['price_kit'] <= self::strToMillion($settings['price-end']) &&
        $element['item_info']['square'] >= floatval($settings['square-start']) &&
        $element['item_info']['square'] <= floatval($settings['square-end']) &&
        (!isset($settings['floor']) || $element['item_info']['floors'] === intval($settings['floor'])) &&
        (!isset($settings['terrace']) || in_array('Терасса', $element['tags'])) &&
        (!isset($settings['garage']) || in_array('Гараж', $element['tags'])) &&
        (!isset($settings['stockroom']) || in_array('Кладовая', $element['tags']) || in_array('Гардеробная', $element['tags'])) &&
        (!isset($settings['balcony']) || in_array('Балкон', $element['tags']));
      if ($filtered) {
        return $element;
      }
    })->toArray();
  }
  public static function getCategoryByName(string $name_category): array
  {
    return self::$card_elements->filter(function ($element) use ($name_category) {
      if ($element['category'] === $name_category) {
        return $element;
      }
    })->toArray();
  }
  /**
   * @param string $value
   * @return int
   */
  private static function strToMillion(string $value): int
  {
    $value = floatval($value) * 1000000;
    return (int)$value;
  }
}
