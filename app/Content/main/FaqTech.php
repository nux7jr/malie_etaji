<?php

namespace App\Content\main;

use Illuminate\Contracts\Support\Arrayable;
use App\Structures\Image;
use App\Structures\Link;
use App\Structures\Video;

class FaqTech implements Arrayable
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
        'question' => 'В чем преимущества SIP технологии?',
        'ans' => [
          'Здания по сип-технологии из панелей от производителя обладают рядом преимуществ:',
          '-не дают усадки;',
          '-не требуют прочного фундамента;',
          '-экономически выгодны;',
          '-быстро строятся;',
          '-обладают отличной тепло- и шумоизоляцией;',
          '-монтаж панели не требует применения спецтехники.'
        ]
      ],
      [
        'question' => 'Можно ли купить проект дома с вашего сайта?',
        'ans' => ['Нет, мы не продаем наши проекты. Только при заказе строительства в нашей компании мы можем дать гарантию на дом и отследить весь процесс от производства до возведения объекта.']
      ],
      [
        'question' => 'Какие у Вас сроки строительства?',
        'ans' => ['Современная технология позволяет строить дома в максимально короткие сроки: от 3-6 месяцев. В зависимости от сложности проекта и планировок срок может быть скорректирован. Все сроки прописываются в договоре.']
      ],
      [
        'question' => 'Вы можете построить дом по программе «Ипотека под строительство»?',
        'ans' => ['Да, мы являемся партнерами 11 банков, которые дают ипотеку на строительство дома.']
      ],
      [
        'question' => 'Какие есть мифы о строительстве из технологии SIP?',
        'ans' => [
          '1. СИП-ПАНЕЛИ ВРЕДНЫ ДЛЯ ЧЕЛОВЕЧЕСКОГО ЗДОРОВЬЯ', 'Панели SIP прошли многочисленные тестирования и проверки, как за рубежом, так и в нашей стране. И все тестирующие инстанции утверждают, что вреда от СИП-панелей на человеческий организм не существует.',
          '2. ПОЖАРООПАСНОСТЬ',
          'По сравнению с деревом, материалы СИП-панелей имеют температуру возгорания в два раза выше, они практически не поддерживают горение. Пенополистерол относится к устойчивым к возгоранию материалам.',
          '3. ДОМА ИЗ СИП-ПАНЕЛЕЙ НЕ НАДЕЖНЫЕ',
          'На самом же деле, такие дома по прочности ничуть не уступают кирпичным постройкам. В опытных исследованиях и реальной практике неоднократно было доказано, что дома из SIP-панелей устойчивы к ураганам, землетрясениям, сильным порывам ветра. ',
          '4. ДОМА ИЗ СИП-ПАНЕЛЕЙ ТРЕБУЮТ ОБУСТРОЙСТВА ДОРОГОЙ ВЕНТИЛЯЦИОННОЙ СИСТЕМЫ',
          '5. В СТЕНАХ ИЗ СИП-ПАНЕЛЕЙ ЗАВОДЯТСЯ ГРЫЗУНЫ',
          'В панелях SIP не заводятся мелкие грызуны и насекомые.',
          '6. СИП-ДОМА НЕДОЛГОВЕЧНЫ',
          'Считается, что такие дома могут прослужить около 150 лет.',
          'Мы имеем сертификаты соответствия наших СИП панелей по всем нормам.'
        ]
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
