{extends file="admin_layout.tpl"}
{block name=body}
    <h3> Create News</h3>
    <form action="/admin/control/create" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">News Name:</label>
            <input type="text" class="form-control" name="news_name" id="news_name">
        </div>
        <div class="form-group">
            <label for="weight">Content:</label>
            <textarea  class="form-control" rows="15" name="content" id="content"></textarea>
        </div>
        <div class="form-group">
            <label for="picture">Picture:</label>
            <input type="file" class="form-control" name="picture" id="picture">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
    <h1>Проверка</h1>
    <form action="/admin/control/check" method="POST">
        <button type="submit" class="btn btn-success">ПРОВЕРИТЬ</button>
    </form>
{/block}