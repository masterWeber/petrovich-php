<?php
namespace StaticallTest\Petrovich\Petrovich;

use PHPUnit\Framework\TestCase;

use Staticall\Petrovich\Petrovich;
use Staticall\Petrovich\Exception;

class DetectGenderTest extends TestCase
{
    public function testEmptyMiddleName()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Middlename cannot be empty');

        Petrovich::detectGender('');
    }

    public function testGenderless()
    {
        $middleNames = [
            'test',
            'тест',
        ];

        foreach ($middleNames as $middleName) {
            static::assertSame(Petrovich::GENDER_ANDROGYNOUS, Petrovich::detectGender($middleName));
        }
    }

    public function testFemale()
    {
        $middleNames = [
            'Адамовна',
            'Афанасьевна',
            'Акимовна',
            'Альбертовна',
            'Александровна',
            'Алексеевна',
            'Анатольевна',
            'Андреевна',
            'Анисимовна',
            'Антоновна',
            'Аркадьевна',
            'Арсеньевна',
            'Артемовна',
            'Артуровна',
            'Архиповна',
            'Аскольдовна',
            'Августовна',
            'Богдановна',
            'Болеславовна',
            'Борисовна',
            'Вадимовна',
            'Валентиновна',
            'Валерьевна',
            'Васильевна',
            'Вениаминовна',
            'Викентиевна',
            'Викторовна',
            'Витальевна',
            'Владимировна',
            'Владиславовна',
            'Всеволодовна',
            'Вячеславовна',
            'Гавриловна',
            'Геннадиевна',
            'Георгиевна',
            'Герасимовна',
            'Германовна',
            'Глебовна',
            'Григорьевна',
            'Даниловна',
            'Давидовна',
            'Денисовна',
            'Дмитриевна',
            'Ефимовна',
            'Ефремовна',
            'Егоровна',
            'Еремеевна',
            'Евгеньевна',
            'Ждановна',
            'Зиновьевна',
            'Игнатьевна',
            'Игоревна',
            'Ильинична',
            'Илларионовна',
            'Иннокентиевна',
            'Ипполитовна',
            'Ивановна',
            'Кирилловна',
            'Кондратьевна',
            'Константиновна',
            'Кузьминична',
            'Лаврентьевна',
            'Лазаревна',
            'Леонидовна',
            'Леоновна',
            'Леонтьевна',
            'Львовна',
            'Макаровна',
            'Максимовна',
            'Марковна',
            'Матвеевна',
            'Мироновна',
            'Михайловна',
            'Мстиславовна',
            'Натановна',
            'Наумовна',
            'Никифоровна',
            'Никитична',
            'Николаевна',
            'Ниловна',
            'Олеговна',
            'Осиповна',
            'Оскаровна',
            'Прохоровна',
            'Павловна',
            'Петровна',
            'Робертовна',
            'Романовна',
            'Ростиславовна',
            'Рубеновна',
            'Рудольфовна',
            'Руслановна',
            'Савельевна',
            'Семеновна',
            'Серафимовна',
            'Сергеевна',
            'Станиславовна',
            'Степановна',
            'Святославовна',
            'Тарасовна',
            'Тимофеевна',
            'Тимуровна',
            'Тихоновна',
            'Федоровна',
            'Федосеевна',
            'Феликсовна',
            'Филипповна',
            'Эдуардовна',
            'Эльдаровна',
            'Эммануиловна',
            'Юльевна',
            'Юрьевна',
            'Яковлевна',
            'Яновна',
            'Ярославовна',
        ];

        foreach ($middleNames as $middleName) {
            static::assertSame(Petrovich::GENDER_FEMALE, Petrovich::detectGender($middleName));
        }
    }

    public function testMale()
    {
        $middleNames = [
            'Александрович',
            'Алексеевич',
            'Анатольевич',
            'Андреевич',
            'Антонович',
            'Аркадьевич',
            'Арсеньевич',
            'Артемович',
            'Афанасьевич',
            'Богданович',
            'Борисович',
            'Вадимович',
            'Валентинович',
            'Валериевич',
            'Васильевич',
            'Викторович',
            'Витальевич',
            'Владимирович',
            'Всеволодович',
            'Вячеславович',
            'Гаврилович',
            'Геннадиевич',
            'Георгиевич',
            'Глебович',
            'Григорьевич',
            'Давыдович',
            'Данилович',
            'Денисович',
            'Дмитриевич',
            'Евгеньевич',
            'Егорович',
            'Емельянович',
            'Ефимович',
            'Иванович',
            'Игоревич',
            'Ильич',
            'Иосифович',
            'Кириллович',
            'Константинович',
            'Корнеевич',
            'Леонидович',
            'Львович',
            'Макарович',
            'Максимович',
            'Маркович',
            'Матвеевич',
            'Митрофанович',
            'Михайлович',
            'Назарович',
            'Наумович',
            'Николаевич',
            'Олегович',
            'Павлович',
            'Петрович',
            'Платонович',
            'Робертович',
            'Родионович',
            'Романович',
            'Савельевич',
            'Семенович',
            'Сергеевич',
            'Станиславович',
            'Степанович',
            'Тарасович',
            'Тимофеевич',
            'Тихонович',
            'Федорович',
            'Феликсович',
            'Филиппович',
            'Эдуардович',
            'Юрьевич',
            'Яковлевич',
            'Ярославович',
        ];

        foreach ($middleNames as $middleName) {
            static::assertSame(Petrovich::GENDER_MALE, Petrovich::detectGender($middleName));
        }
    }
}