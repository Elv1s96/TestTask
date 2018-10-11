{extends file="layout.tpl"}
{block name=body}
    <!-- <link rel="stylesheet" href="/style.css"> -->
    <script src="/News/style.js"></script>
    <div class="form-group">
        <label for="category_id">Отсортировать по:</label>
        <form action="/main/index" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">По-умолчанию</button>
        </form>
        <form action="/main/newtoold" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">От новых до старых</button>
        </form>
        <form action="/main/abc" method="POST" enctype="multipart/form-data">
            <button type="submit" class="btn btn-success">По алфавиту</button>
        </form>
    </div>
    {foreach $news as $index => $new}
        <section id="profiles" class="page">
            <div class="container">
                <div class="container-fluid">
                    <div class="row" id="profile-grid">
                        <div class="">
                            <div class="panel panel-default">
                                <div class="panel-default">
                                    <a href="#" title="Big picture" class="thumb">
                                        <img src="/files/show/{$new['id']}/c0c0c0&amp;text=image0x206" class="img-responsive img-rounded center-block " data-toggle="modal" style="height: 500px; width:700px !important;" data-target=".modal-profile-lg">
                                    </a>
                                </div>
                                <div class="">
                                    <p class="" style="text-align:center;">{$new['name']}</p>
                                    <p style="text-align:center;">{$new['created_at']}</p>
                                    <div class="panel-heading" >
                                        <p>{$new['content']}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {/foreach}
    <div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title"></h3>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- //.modal-profile -->

{/block}



