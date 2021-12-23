<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted !!</title>
</head>
<style>
    body{
        text-align: center;
        position: relative;
        top: 4em;
    }
</style>
<body>

    <?php if ($data['deletedCount']): ?>
        <div class="success" style="color:blue">
            <h4>فیلد مورد نظر با موفقیت حذف شد</h4>
        </div>
    <?php endif; ?>
    <?php if (!$data['deletedCount']): ?>
        <div class="danger" style="color:red">
            <h4>فیلد مورد نظر حذف نشد</h4>
        </div>
    <?php endif; ?>
    <br><br>
    <div class="snipp">
        <img src="<?= $_ENV['BASEURL'] ?>assets/images/snippet.gif" alt="">
    </div>

    <script>
        setTimeout(() => {
            location.href = '<?= $_ENV['BASEURL'] ?>';
        }, 2000);
    </script>
</body>
</html>