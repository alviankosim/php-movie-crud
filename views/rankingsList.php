<div class="wrapper">
    <?= show_message() ?>
</div>
<div class="wrapper" style="display: inline-flex;align-items:center">
    <h2><span class="hashtag">#</span> Rankings List <small>(Top 10)</small> &nbsp;</h2>
</div>
<div class="wrapper">
    <table class="tbl-rounded">
        <thead>
            <tr>
                <th>#</th>
                <th>Poster</th>
                <th>Title</th>
                <th>Stars</th>
            </tr>
        </thead>
        <tbody>
            <? $no = 1;
            foreach($result as $row): ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><img width="100" src="<?= $row['image_link'] ?>" alt="<?= $row['title'] ?>"></td>
                    <td style="text-align: left;"><a class="links" style="color:#333" href="/movie/main/movie/detail.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></td>
                    <td><?= substr(floatval($row['stars']), 0, 3) ?><i class="fa fa-star"></i></td>
                </tr>
            <? $no++;
            endforeach ?>
        </tbody>
    </table>
</div>
