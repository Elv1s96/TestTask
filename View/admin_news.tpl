{extends file="admin_layout.tpl"}
{block name=body}
    <link rel="stylesheet" href="/News/main.css" type="text/css" />
    <script src="/News/style.js"></script>
    <script src="/News/imtech_pager.js"></script>
    <div class="form-group">
        <label for="category_id">Отсортировать по:</label>
        <form action="/admin/news/index" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">По-умолчанию</button>
        </form>
        <form action="/admin/news/newtoold" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">От новых до старых</button>
        </form>
        <form action="/admin/news/abc" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">По алфавиту</button>
        </form>
    </div>
    <div class="example">
        <div id="content">
            {foreach $news as $index => $new}
                <div class="z">
                        <div class="panel panel-default">
                            <img src="/files/show/{$new['id']}" alt="..." class="center-block img-responsive" style="height: 500px; width:700px !important;">
                            <div style="text-align:center;">
                                <p>{$new['name']}</p>
                            </div>
                            <div style="text-align:center;">
                                <p>{$new['created_at']}</p>
                            </div>
                            <div class="panel-heading custom_class" >
                                <p>{$new['content']}</p>
                                <p class="text-right"><a href="/admin/control/remove/{$new['id']}?a=1" type="submit" class="btn btn-danger">Remove</a></p>
                            </div>

                        </div>
                </div>
            {/foreach}
        </div>
        <div style="text-align: center" id="pagingControls"></div>
    </div>

    <script type="text/javascript">
        var pager = new Imtech.Pager();
        $(document).ready(function() {
            // кол-во выводимых параграфов () или div )
            // на одной странице
            pager.paragraphsPerPage = 2;
            // основной контейнер
            pager.pagingContainer = $('#content');
            // обозначаем требуемый блок ('div.z')
            pager.paragraphs = $('div.z', pager.pagingContainer);
            pager.showPage(1);
        });
    </script>
{/block}
