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
        'id' => __('0'),
        'name' => __('Барн 29-42'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/29-42/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/29-42/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/29-42/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/29-42/4-main.jpg',
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
              src: 'barns/29-42/plan.pdf',
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
          'Полноценная спальня',
          'Современный вид',
          'Просторная студия 25 м²',
          'Просторная крытая терраса',
          'Выделенная зона кухни, отдыха и входная группа',
        ],
      ],
      [
        'id' => __('1'),
        'name' => __('Барн 53-56'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/53-56/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/53-56/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/53-56/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/53-56/4-main.jpg',
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
              src: 'barns/53-56/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Входная группа-тамбур',
          'Просторная кухня-гостиная',
          'Полноценная спальня',
          'Высокие потолки до 3,8 м',
          'Панорамное остекление',
        ],
      ],
      [
        'id' => __('2'),
        'name' => __('Барн 60-78'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/60-78/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/60-78/2-main.jpg',
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
              src: 'barns/60-78/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Современный вид',
          'Большая гостиная-кухня',
          'Просторная терраса',
          '2 комнаты/спальни',
          'Высокие потолки'
        ],
      ],
      // new
      [
        'id' => __('3'),
        'name' => __('Барн 62-67'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/62-67/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'barns/62-67/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/62-67/4.jpg',
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
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузела',
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
              src: 'barns/62-67/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Наличие кладовой',
          'Большая гостиная-кухня',
          'Просторная терраса',
          '2 комнаты/спальни',
          'Панорамное остекление'
        ],
      ],
      [
        'id' => __('4'),
        'name' => __('Барн 63-76'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/63-76/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'barns/63-76/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/63-76/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1917000,
        'price_end' => 2123000,
        'price_finish' => 5400000,
        'price_small' => __('от 1.9 млн ₽'),
        'item_info' => [
          'square' => 76,
          'floors' => '1',
          'bedrooms' => '3',
          'bathrooms' => '1',
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
              src: 'barns/63-76/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Большая гостиная-кухня',
          'Просторная крытая терраса',
          '2 комнаты/спальни',
          'Наличие кладовой',
          'Панорамное остекление'
        ],
      ],
      [
        'id' => __('5'),
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
          'floors' => '1',
          'bedrooms' => '3',
          'bathrooms' => '2',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузела',
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
              src: 'barns/75-90/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Большая гостиная-кухня',
          'Просторная крытая терраса',
          '2 комнаты/спальни',
          'Наличие гардеробной',
          '2 санузла'
        ],
      ],
      [
        'id' => __('6'),
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
          'floors' => '1',
          'bedrooms' => '4',
          'bathrooms' => '2',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузела',
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
              src: 'barns/86-102/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Большая гостиная-кухня',
          'Просторная крытая терраса',
          '3 комнаты/спальни',
          'Наличие кладовой',
          '2 санузла'
        ],
      ],
      [
        'id' => __('7'),
        'name' => __('Барн 87-110'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'barns/87-110/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'barns/87-110/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'barns/87-110/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 2704000,
        'price_end' => 3913000,
        'price_finish' => 6675000,
        'price_small' => __('от 2,7 млн ₽'),
        'item_info' => [
          'square' => 110,
          'floors' => '1',
          'bedrooms' => '3',
          'bathrooms' => '2',
        ],
        'formated_info' => [
          'floors' => '1 этаж',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузела',
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
              src: 'barns/87-110/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Большая гостиная-кухня',
          'Просторная крытая терраса',
          '3 комнаты/спальни',
          'Наличие гардеробной',
          '2 санузла'
        ],
      ],
      //
      [
        'id' => __('8'),
        'name' => __('ДВ 112-141'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/112-141/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/112-141/2-main.jpg',
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
            src: 'double/112-141/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/112-141/2.jpg',
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
          'floors' => '2',
          'bedrooms' => '6',
          'bathrooms' => '2',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '6 комнат',
          'bathrooms' => '2 санузела',
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
              src: 'double/112-141/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Большая гостиная-кухня',
          '5 полноценных спален',
          'Отдельное тех. помещение',
          'Уютный балкон',
          '2 санузла'
        ],
      ],
      [
        'id' => __('9'),
        'name' => __('ДВ 123-160'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/123-160/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'double/123-160/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/123-160/3.jpg',
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
          'floors' => '2',
          'bedrooms' => '5',
          'bathrooms' => '2',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '5 комнат',
          'bathrooms' => '2 санузела',
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
              src: 'double/123-160/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Отдельная кухня-столовая и гостиная',
          '4 полноценных спальни',
          'Второй свет',
          'Уютный балкон',
          '2 санузла'
        ],
      ],
      [
        'id' => __('10'),
        'name' => __('ДВ 136-165'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/136-165/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/2-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/3-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/4-main.jpg',
          ))->getSrc(),
        ],
        'small_images' => [
          (new Image(
            src: 'double/136-165/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 3270000,
        'price_end' => 5481000,
        'price_finish' => 9027000,
        'price_small' => __('от 3.2 млн ₽'),
        'item_info' => [
          'square' => 135,
          'floors' => '2',
          'bedrooms' => '4',
          'bathrooms' => '2',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '4 комнаты',
          'bathrooms' => '2 санузела',
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
              src: 'double/123-160/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Гараж на 1 м/м',
          'Гостиная-кухня',
          '5 полноценных спален',
          'Уютный балкон',
          '2 санузла'
        ],
      ],
      [
        'id' => __('11'),
        'name' => __('ДВ 136-165-2'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/136-165-2/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165-2/2-main.jpg',
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
            src: 'double/136-165-2/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/136-165-2/2.jpg',
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
          'floors' => '2',
          'bedrooms' => '4',
          'bathrooms' => '2',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '4 комнаты',
          'bathrooms' => '2 санузела',
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
        'tags' => ['Гараж', 'Терраса', 'Кабинет'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'double/136-165-2/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Гараж на 1 м/м',
          'Гостиная-кухня',
          '5 полноценных спален',
          'Уютный балкон',
          '2 санузла'
        ],
      ],
      [
        'id' => __('12'),
        'name' => __('ДВ 72-92'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/72-92/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/72-92/2-main.jpg',
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
            src: 'double/72-92/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/72-92/2.jpg',
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
          'floors' => '2',
          'bedrooms' => '3',
          'bathrooms' => '2',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузела',
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
        'tags' => ['Терраса', 'Гардеробная'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'double/72-92/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Гостиная-кухня',
          '2 полноценных спальни',
          'Уютный балкон',
          '2 санузла',
          'Гардеробная'
        ],
      ],
      [
        'id' => __('13'),
        'name' => __('ДВ 75-92'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'double/75-92/1-main.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/75-92/2-main.jpg',
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
            src: 'double/75-92/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'double/75-92/2.jpg',
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
          'floors' => '2',
          'bedrooms' => '3',
          'bathrooms' => '2',
        ],
        'formated_info' => [
          'floors' => '2 этажа',
          'bedrooms' => '3 комнаты',
          'bathrooms' => '2 санузела',
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
        'tags' => ['Терраса', 'Тех.помещение'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'double/75-92/plan.pdf',
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
            ''
          ]
        ],
        'peculiarities' => [
          'Просторная гостиная-кухня',
          '2 полноценных спальни',
          'Крытая терраса',
          '2 санузла',
          'Гардеробная'
        ],
      ],
    ]);
  }

  /**
   * @param int $id
   * @return Closure|null
   */
  public static function getItemById(int $id): Closure|array
  {
    return self::$card_elements->get($id);
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
        $element['item_info']['square'] <= floatval($settings['square-end']);
      if ($filtered) {
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
