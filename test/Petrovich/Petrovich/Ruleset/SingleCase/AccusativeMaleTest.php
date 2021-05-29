<?php

namespace Masterweber\Test\Petrovich\Petrovich\Ruleset\SingleCase;

use Masterweber\Petrovich\Petrovich\Ruleset;
use Masterweber\Petrovich\Petrovich\ValidationException;
use Masterweber\Test\Petrovich\Petrovich\Ruleset\SingleCaseHelper;

class AccusativeMaleTest extends SingleCaseHelper
{
    const THIS_CASE = Ruleset::CASE_ACCUSATIVE;
    const THIS_GENDER = Ruleset::GENDER_MALE;

    /**
     * @throws ValidationException
     */
    public function testNoExceptionsNoSuffixes()
    {
        $this->runTestNoExceptionsNoSuffixes(
            'Тест',
            'Тест',
            static::THIS_CASE,
            static::THIS_GENDER
        );
    }

    /**
     * @throws ValidationException
     */
    public function testHasExceptionsGenderWrong1NoSuffixes()
    {
        $this->runTestHasExceptionsGenderWrong1NoSuffixes(
            'Тест',
            'Тест',
            static::THIS_CASE,
            static::THIS_GENDER
        );
    }

    /**
     * @throws ValidationException
     */
    public function testHasExceptionsGenderWrong2NoSuffixes()
    {
        $this->runTestHasExceptionsGenderWrong2NoSuffixes(
            'Тест',
            'Тест',
            static::THIS_CASE,
            static::THIS_GENDER
        );
    }

    /**
     * @throws ValidationException
     */
    public function testHasExceptionsCorrectGenderNoSuffixes()
    {
        $this->runTestHasExceptionsCorrectGenderNoSuffixes(
            'Тест',
            'Теъва',
            static::THIS_CASE,
            static::THIS_GENDER
        );
    }

    /**
     * @throws ValidationException
     */
    public function testHasExceptionsCorrectGenderAfterIncorrectNoSuffixes()
    {
        $this->runTestHasExceptionsCorrectGenderAfterIncorrectNoSuffixes(
            'Тест',
            'Теъва',
            static::THIS_CASE,
            static::THIS_GENDER
        );
    }

    /**
     * @throws ValidationException
     */
    public function testHasExceptionsAndSuffixes()
    {
        $this->runTestHasExceptionsAndSuffixes(
            'Тест',
            'Теъва',
            static::THIS_CASE,
            static::THIS_GENDER
        );
    }

    /**
     * @throws ValidationException
     */
    public function testHasExceptionsAndSuffixesReverseOrder()
    {
        $this->runTestHasExceptionsAndSuffixesReverseOrder(
            'Тест',
            'Теъва',
            static::THIS_CASE,
            static::THIS_GENDER
        );
    }

    /**
     * @throws ValidationException
     */
    public function testNoExceptionsHasSuffixes()
    {
        $this->runTestNoExceptionsHasSuffixes(
            'Тест',
            'Теъва',
            static::THIS_CASE,
            static::THIS_GENDER
        );
    }

    /**
     * @throws ValidationException
     */
    public function testNoExceptionsHasSuffixesDotMod()
    {
        $this->runTestNoExceptionsHasSuffixesDotMod(
            'Тест',
            'Тест',
            static::THIS_CASE,
            static::THIS_GENDER
        );
    }

    /**
     * @throws ValidationException
     */
    public function testIncorrectInputShouldReturnInput()
    {
        $this->runTestIncorrectInputShouldReturnInput(
            'Неизвестно',
            'Тест',
            'Неизвестно',
            static::THIS_CASE,
            static::THIS_GENDER
        );
    }
}
