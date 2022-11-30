<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://code.jquery.com/jquery-3.1.1.js">


    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    @vite(['resources/js/admin.js','resources/css/admin.css'])
</head>

<body>

    <div class="sidebar_menu">
        <div class="sidebar-title">
            <a href="{{ route('home') }}" class="navbar_logo">
            <h3 style="color: #000; font-size: 28px; font-weight: 700;">MINA</h3>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="sidebar-item active">Account Management</li>
            <li class="sidebar-item">Product Management</li>
            <li class="sidebar-item">Order Management</li>
        </ul>
    </div>

    <div class="sidebar_content" style="margin-left: 370px;width: 100%;">

        <!-- form quản lý tài khoản -->
        <div class="list-user content active">
            <div class="managament-title">
            List of user accounts
            </div>
            <div class="box" style="background-color: #c5c5c5;color: #000; padding: 20px; width: 300px; border-radius: 5px; border-bottom: 3px solid #000; margin-bottom: 30px;">
                <div class="title">Account number:</div>
                <span class="account-number"></span>
            </div>
            <table id="manager">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>User name</th>
                        <th>Gmail</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
        <!-- form quản lý sản phẩm -->
        <div class="list-skin content">
            <div class="managament-title">
            List of products
            </div>
            <div class="box" style="background-color: #c5c5c5;color: #000; padding: 20px; width: 300px; border-radius: 5px; border-bottom: 3px solid #000; margin-bottom: 30px;">
                <div class="title">Products number:</div>
                <span class="product-number"></span>
            </div>
            <!-- add skin -->

            <div class="add">
                <button type="button" class="add btn btn-primary" data-toggle="modal" data-target="#skinaddmodal">Add product</button>
            </div>
            <table id="manager-skin">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Product's name</th>
                        <th>Image</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
       
        <!-- form quản lý đơn sp  -->
        <div class="list-receipt content">
            <div class="managament-title">
            List of Invoices
            </div>
            <div style="display: flex;">
                <div class="box" style="background-color: #c5c5c5;color: #000; padding: 20px; width: 300px; border-radius: 5px; border-bottom: 3px solid #000; margin-bottom: 30px;">
                    <div class="title">Receipt number:</div>
                    <span class="receipt-number"></span>
                </div>
                <div class="box" style="background-color: #c5c5c5;color: #000; padding: 20px; width: 300px; border-radius: 5px; border-bottom: 3px solid #000; margin-bottom: 30px; margin-left: 50px;">
                <div class="title">Total revenue:</div>
                <span class="total-revenue"></span>
            </div>
            </div>
            <table id="manager-receipt" style="width: 100%;">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Product Type</th>
                        <th>Customer name</th>
                        <th>Amount products</th>
                        <!-- <th>Price</th> -->
                        <th>Address</th>
                        <th>total</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    

    </div>
    <!-- add product -->
    <div class="modal fade" id="skinaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add product</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Name product</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên trang phục">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" required name="image">
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" class="form-control" name="amount" placeholder="Enter amount">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn-save btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- edit product -->
    <div class="modal fade" id="skineditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit product</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{route('product.update',6)}}" id="editFormID" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Name product</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" required name="img">
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" class="form-control" name="amount" placeholder="Enter amount">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Updated</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script>
        jQuery(document).ready(function () {
            jQuery(".btn-edit").on("click", function (e) {
                e.preventDefault();
                jQuery("#skineditmodal").modal("show");

                var tr = jQuery(this).closest("tr");
                var data = tr
                    .children("td")
                    .map(function () {
                        return jQuery(this).text();
                    })
                    .get();

                jQuery("input[name='name']").val(data[1]);
                jQuery("input[name='photo']").val(data[2]);
                jQuery("input[name='amount']").val(data[3]);
                jQuery("input[name='price']").val(data[4]);

                document.querySelector(
                    "#editFormID"
                ).action = `http://127.0.0.1:8000/product/${data[0]}`;
            });
            jQuery("#editFormID").on("submit", function (e) {});
        });

        //table skins
        var table = jQuery("#manager-skin").DataTable({
            ajax: "/product",
            serverSide: true,
            autoWidth: false,
            processing: true,
            aaSorting: [[0, "asc"]],
            columns: [
                {
                    data: "id",
                },
                {
                    data: "name",
                },
                {
                    data: "photo",
                    render: function (data) {
                        var img = `<img src="{{URL::asset('public/image/${data}')}}"/>`;
                        return img;
                    },
                },
                {
                    data: "amount",
                    name: "amount",
                },
                {
                    data: "price",
                    name: "price",
                },

                {
                    data: "action",
                    name: "action",
                },
            ],
        });

    </script>
</body>
</html>