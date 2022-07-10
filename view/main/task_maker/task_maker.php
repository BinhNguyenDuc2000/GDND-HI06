<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center">
            <h3 class="text-sm-center">Tạo công việc mới</h3>
        </div>
        <div style="display: flex; flex-wrap:wrap; justify-content: space-between;">
            <p style="height: 50px;"><b>Tên công việc</b> <input id="name" value="name"/> </p>
            <p style="height: 50px;"><b>Thời gian bắt đầu</b> <input type="date" value="2022-06-01"> </p>
            <p style="height: 50px;"><b>Thời gian kết thúc</b> <input type="date" value="2022-06-01"> </p>
            <p><b>Nhân viên:</b> <input id="employee" value="name"/></p>
            <p style="width: 1000px;"><b>Địa điểm</b> <input id="place" value="Hà Nội"></p>
        </div>
        <p><b>Nội dung công việc</b></p>
        <!-- <p class="text-sm-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam metus urna, varius non dolor ac, tempor semper metus. Quisque mollis semper eros vel ultricies. Donec auctor lobortis porttitor. Proin tristique sem non viverra interdum. Proin euismod arcu sagittis nisl rhoncus porttitor. In gravida fermentum dolor, at vestibulum dui tincidunt sit amet. Nam a tellus sit amet urna fringilla aliquet id eu ante. Proin aliquet facilisis lacus, mollis sollicitudin tellus mollis sit amet. Mauris ac nunc orci. Maecenas dapibus malesuada justo, vel imperdiet odio volutpat vitae. Vestibulum faucibus lectus venenatis, dignissim felis quis, suscipit lorem.</p> -->
        <div class="container-fluid pt-4 px-4" style="background-color: #E8E8E8; padding-bottom: 1.5rem;">
            <input style="width: 100%"/>
        </div>
        <button type="btnCreate" name="btnCreate" id="btnCreate" class="btn btn-primary py-3 w-100 mb-4">Tạo công việc</button>
    </div>
</div>
<script type="text/javascript">
        document.getElementById("btnCreate").onclick = function (){
            alert("Tạo công việc thành công");
            window.location.href = "https://binhnguyen-tech.stackstaging.com/TreeCare/Task?method=list#CreatedTask";
        }
    
</script>