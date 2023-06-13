<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;
use App\Structures\Pdf;

class HousesInfo implements Arrayable
{
  /**
   * Element use App\Structures\Image for build assets
   * @var array|array[]
   */
  private static array $card_elements;
  public function __construct()
  {
    self::$card_elements = [
      [
        'id' => __('0'),
        'name' => __('Барн 29-42'),
        'category' => __('Барны'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'resources/images/barns/29-42/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/29-42/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/29-42/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/29-42/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 919000,
        'price_end' => 1797000,
        'price_finish' => 3619000,
        'price_small' => __('от 0.9 млн ₽'),
        'item_info' => [
          'square' => '42',
          'floors' => '1',
          'bedrooms' => '1',
          'bathrooms' => '1',
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
            src: 'resources/images/barns/29-42/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/29-42/6.jpg',
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
              src: 'resources/images/barns/29-42/5.jpg',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/barns/29-42/6.jpg',
            ))->getSrc()
          ],
          '3d' => [
            (new Image(
              src: 'resources/images/barns/29-42/video1.mp4',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/barns/29-42/video1.mp4',
            ))->getSrc(),
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
            src: 'resources/images/barns/53-56/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/53-56/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/53-56/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/53-56/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1666000,
        'price_end' => 2729000,
        'price_finish' => 4803000,
        'price_small' => __('от 1.6 млн ₽'),
        'item_info' => [
          'square' => '56',
          'floors' => '1',
          'bedrooms' => '2',
          'bathrooms' => '1',
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
            src: 'resources/images/barns/60-78/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/60-78/6.jpg',
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
              src: 'resources/images/barns/60-78/5.jpg',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/barns/60-78/6.jpg',
            ))->getSrc()
          ],
          '3d' => [
            (new Image(
              src: 'resources/images/barns/60-78/video1.mp4',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/barns/60-78/video1.mp4',
            ))->getSrc(),
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
            src: 'resources/images/barns/60-78/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/60-78/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/60-78/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/60-78/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1799000,
        'price_end' => 2854000,
        'price_finish' => 5227000,
        'price_small' => __('от 1.8 млн ₽'),
        'item_info' => [
          'square' => '77',
          'floors' => '1',
          'bedrooms' => '3',
          'bathrooms' => '1',
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
            src: 'resources/images/barns/60-78/5.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/barns/60-78/6.jpg',
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
              src: 'resources/images/barns/60-78/5.jpg',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/barns/60-78/6.jpg',
            ))->getSrc()
          ],
          '3d' => [
            (new Image(
              src: 'resources/images/barns/60-78/video1.mp4',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/barns/60-78/video1.mp4',
            ))->getSrc(),
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
      // sigle
      [
        'id' => __('3'),
        'name' => __('ОД 65-77'),
        'category' => __('Одноэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'resources/images/single/65-77/1-2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/single/65-77/2-2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/single/65-77/3-2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/single/65-77/4-2.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1799000,
        'price_end' => 2854000,
        'price_finish' => 5227000,
        'price_small' => __('от 1.8 млн ₽'),
        'item_info' => [
          'square' => '67',
          'floors' => '1',
          'bedrooms' => '3',
          'bathrooms' => '2',
          'ceiling' => '3.8м',
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
            src: 'resources/images/single/65-77/3-2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/single/65-77/4-2.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/single/65-77/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'resources/images/single/65-77/3-2.jpg',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/single/65-77/4-2.jpg',
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
      // double
      [
        'id' => __('4'),
        'name' => __('ДВ 72-92'),
        'category' => __('Двухэтажные'),
        'title' => __('Дом'),
        'big_slider_images' => [
          (new Image(
            src: 'resources/images/double/72-92/1.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/72-92/2.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/72-92/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/72-92/4.jpg',
          ))->getSrc(),
        ],
        'price_kit' => 1799000,
        'price_end' => 2854000,
        'price_finish' => 5227000,
        'price_small' => __('от 1.8 млн ₽'),
        'item_info' => [
          'square' => '67',
          'floors' => '1',
          'bedrooms' => '3',
          'bathrooms' => '2',
          'ceiling' => '3.8м',
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
            src: 'resources/images/double/72-92/3.jpg',
          ))->getSrc(),
          (new Image(
            src: 'resources/images/double/72-92/4.jpg',
          ))->getSrc(),
        ],
        'tags' => ['Терраса'],
        'preview' => [
          'plan' => [
            (new Pdf(
              src: 'resources/images/double/72-92/plan.pdf',
            ))->getSrc(),
          ],
          'facade' => [
            (new Image(
              src: 'resources/images/double/72-92/3.jpg',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/double/72-92/4.jpg',
            ))->getSrc()
          ],
          '3d' => [
            (new Image(
              src: 'resources/images/double/72-92/video1.mp4',
            ))->getSrc(),
            (new Image(
              src: 'resources/images/double/72-92/video1.mp4',
            ))->getSrc(),
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
    ];
  }
  /**
   * @return array
   */
  public function toArray(): array
  {
    return self::$card_elements;
  }
}
