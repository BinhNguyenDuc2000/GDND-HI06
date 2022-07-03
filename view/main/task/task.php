<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center">
            <h3 class="text-sm-center">Công việc <?php echo ($data['task_name']); ?></h3>
        </div>
        <div style="display: flex; flex-wrap:wrap; justify-content: space-between;">
            <p style="height: 50px;"><b>Thời gian bắt đầu</b> 12/6/2022</p>
            <p style="height: 50px;"><b>Thời gian kết thúc</b> 13/6/2022</p>
            <p><b>Thời gian còn lại:</b> 1 ngày</p>
            <p><b>Nhân viên:</b> name</p>
            <p style="width: 1000px;"><b>Địa điểm</b> Hà Nội</p>
            <p><b>Tiến độ: </b> <select id="progress">
                    <option value="notdone" selected="selected">Chưa xong</option>
                    <option value="done">Đã xong</option>
                </select>
            </p>
            <button type="btnUpdate" name="btnUpdate" id="btnUpdate" class="btn btn-primary py-3 w-100 mb-4 d-none">Cập nhật</button>
        </div>
        <p><b>Nội dung công việc</b></p>
        <p class="text-sm-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam metus urna, varius non dolor ac, tempor semper metus. Quisque mollis semper eros vel ultricies. Donec auctor lobortis porttitor. Proin tristique sem non viverra interdum. Proin euismod arcu sagittis nisl rhoncus porttitor. In gravida fermentum dolor, at vestibulum dui tincidunt sit amet. Nam a tellus sit amet urna fringilla aliquet id eu ante. Proin aliquet facilisis lacus, mollis sollicitudin tellus mollis sit amet. Mauris ac nunc orci. Maecenas dapibus malesuada justo, vel imperdiet odio volutpat vitae. Vestibulum faucibus lectus venenatis, dignissim felis quis, suscipit lorem.</p>
    </div>
</div>
<script type="text/javascript">
        document.getElementById("progress").onchange = function (){
            var element = document.getElementById("btnUpdate");
            element.classList.remove("d-none");
        }

        document.getElementById("btnUpdate").onclick = function (){
            alert("Cập nhật thành công");
        }
    
</script>