<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-md-12 col-md-12 col-xl-12">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Danh sách công việc</h6>
                    <a href="Task?method=make" class="Manager" id="Manager">Giao việc</a>
                </div>
                <!-- <div class="d-flex mb-2">
                    <input class="form-control bg-dark border-0" type="text" placeholder="Enter task">
                    <button type="button" class="btn btn-primary ms-2">Add</button>
                </div> -->
                <div class="container-fluid pt-4 px-4" style="background-color: #E8E8E8; padding-bottom: 1.5rem;">
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span id="FirstTask">Short task goes here...</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span>Short task goes here...</span></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span>Short task goes here...</span></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span>Short task goes here...</span></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span>Short task goes here...</span></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span>Short task goes here...</span></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span>Short task goes here...</span></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span>Short task goes here...</span></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span>Short task goes here...</span></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span>Short task goes here...</span></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span>Short task goes here...</span></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <a href="Task?method=taskById"><span>Short task goes here...</span></a>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        
        if (window.location.href.split('#')[1] == "CreatedTask")
        {
            document.getElementById("FirstTask").innerHTML = "Short task goes here...  &#09<b style=\"color: red;\">Mới</b>";
        }
    </script>
    <!-- Hide items -->
    <script type="text/javascript">
        const collection = document.getElementsByClassName("Manager");
        $data = <?php 
        echo("\"");
        echo($data["type"]);
        echo("\""); ?>;
        if ($data.localeCompare("Quản lý") != 0)
            for (let i = 0; i < collection.length; i++) {
                collection[i].classList.add("d-none");
            }
    </script>
</div>
