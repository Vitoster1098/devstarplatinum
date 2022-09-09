<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addString('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">');
$APPLICATION->SetTitle("Тестовое задние"); ?>

<?php
    if(isset($_POST['ADD'])) //Если пришло что-то из формы post - начининаем процесс добавления записи в инфоблок
    {
        //Формируем поля для отправки
        $arLoadProductArray = [
            'IBLOCK_SECTION_ID' => false, // элемент лежит в корне раздела
            'IBLOCK_ID' => 1, //id инфоблока
            'NAME' => $_POST['NAME'],
            'CODE' => $_POST['CODE'],
            'SORT' => $_POST['SORT'],
            'ACTIVE' => 'Y', // активен
        ];
        if(CModule::IncludeModule("iblock")) {
            $el = new CIBlockElement;
            if ($PRODUCT_ID = $el->Add($arLoadProductArray, false, false, false)) {
                echo 'Добавлен новый элемент с ID: ' . $PRODUCT_ID ;
            } else {
                echo 'Ошибка добавления: ' . $el->LAST_ERROR;
            }
            echo '<br><br>';
        }
    }
?>

<?php
    $arSelect = ['NAME', 'SORT'];
    $arFilter = ['IBLOCK_ID' => '1', 'ACTIVE' => 'Y'];
    $arSort = ['DATE_CREATE' => 'DESC'];
    $maxSort = -1; //переменная для записи максимального значения сортировки, нужно для кода и сортировки
    if(CModule::IncludeModule("iblock")):
        //формируем объект с пар-ми: сортировки, фильтрации, вывода 5ти записей, требуемых значений
        $res = CIBlockElement::GetList($arSort, $arFilter, false, ['nTopCount' => '5'], $arSelect);
        //перебор значений
        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();
            echo '<div class="box1 form-control">' . $arFields['NAME'] . '</div>';
            if(intval($arFields['SORT']) > $maxSort)
            {
                $maxSort = intval($arFields['SORT']);
            }
        }
    endif;
?>
<br><br><br>
    <!--Форма для добавления значений-->
    <div class="row">
        <form action="/test-task/index.php" method="post">
            <label for="NAME">Название статьи: <input class="form-control" type="text" name="NAME" value="Статья <?= substr($maxSort+1, 1)?>" required /></label><br>
            <label for="CODE">Символьный код: <input class="form-control" type="text" name="CODE" value="statya-<?=$maxSort+1 ?>" required /></label><br>
            <label for="SORT">Сортировка: <input class="form-control" type="text" name="SORT" value="<?=$maxSort+1 ?>" required /></label><br><br>
            <input type="hidden" name="ADD" value="add">
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>