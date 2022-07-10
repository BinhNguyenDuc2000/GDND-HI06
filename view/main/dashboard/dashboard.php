<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-md-12 col-md-12 col-xl-12">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Danh sách công việc hôm nay</h6>
                    <a href="Task?method=list">Tất cả công việc</a>
                </div>
                <div class="d-flex align-items-center border-bottom py-2">
                    <input id="DailyTaskCheckBox" class="form-check-input m-0" type="checkbox">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <a href="Task?method=taskById"><span id="DailyTask">Short task goes here...</span></a>
                            <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        
        if (window.location.href.split('#')[1] == "CompletedTask")
        {
            document.getElementById("DailyTaskCheckBox").checked = true;
            document.getElementById("DailyTask").innerHTML = "Short task goes here...  &#09<b style=\"color: red;\">Đang chờ phê duyệt</b>"
        }
    </script>
</div>