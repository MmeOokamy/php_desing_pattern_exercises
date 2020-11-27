<!-- Your code here -->
<div class="row mx-3">
    <div class="col-4">
        <form action="?controller=posts&action=create" method="post" class="border border-light p-5">

            <p class="h4 mb-4 text-center">File me, I'm a Slut Database!</p>

            <input type="text" id="defaultContactFormName" name="author" class="form-control mb-4" placeholder="Nom de Plume">

            <textarea class="form-control rounded-0" name="content" id="exampleFormControlTextarea2" rows="3" placeholder="Entends tu chanter les esprits la montagne?"></textarea>

            <button class="btn btn-info btn-block" type="submit">Fait peter!</button>
        </form>
    </div>

    <div class="col-8">
        <table class="table">
        <thead class="black white-text">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Auteur</th>
            <th scope="col">action possible</th>

        </tr>
        </thead>
        <tbody>

        <?php foreach($posts as $post) { ?>
            <tr>
                <th><?= $post->id ?></th>
                <td><?= $post->author; ?></td>
                <td>
                    <button type="button" class="btn btn-info px-3"><a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'><i class="far fa-eye"></i></a> </button> -
                    <button type="button" class="btn btn-danger px-3"><a href='?controller=posts&action=delete&id=<?php echo $post->id; ?>'><i class="far fa-trash-alt"></i></a></button>
                </td>

            </tr>
        <?php } ?>

        </tbody>
    </table>
    </div>
</div>


