<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="v2/templates.framework-y.com/front-end/account/css/css-account.css">
    <link rel="stylesheet" href="v2/templates.framework-y.com/front-end/account/css/css-reset.css">
</head>

<body>
    <div class="main">
        <form action="" method="POST" class="form" id="form-1">
            <h1 class="heading">Đăng ký thành viên </h1>
            <p class="desc">Cùng bắt đầu cuộc hành trình cùng chúng tôi <span style="color: #E60000;">❤</span></p>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="fullname" class="form-label">Tên đầy đủ</label>
                <input type="text" name="fullname" id="fullname" placeholder="VD: Anthony Edward Stark"
                    class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" placeholder="VD: AnthonyEdwardStark@gmail.com"
                    class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="password" id="password" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Nhập lại mật khẩu" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="province" class="form-label">Tỉnh/TP</label>
                <select id="province" name="province" class="form-control">
                    <option value="">-- Chọn tỉnh/TP --</option>
                    <option value="hn">Hà Nội</option>
                    <option value="hcm">TP.HCM</option>
                </select>
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="gender" class="form-label">Giới tính</label>
                <div class="chooseGender">
                    <input type="radio" name="gender" value="male" class="form-control">
                    Nam
                </div>
                <div class="chooseGender">
                    <input type="radio" name="gender" value="female" class="form-control">
                    Nữ
                </div>
                <div class="chooseGender">
                    <input type="radio" name="gender" value="orther" class="form-control">
                    Khác
                </div>
                <span class=" form-message"></span>
            </div>

            <button class="form-submit">Đăng ký</button>
        </form>
    </div>
    <script src="v2/templates.framework-y.com/front-end/account/js/validation.js"></script>
    <script>
        Validation({
            form: '#form-1',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validation.isRequired('#fullname'),
                Validation.isRequired('#email'),
                Validation.isEmail('#email'),
                Validation.isRequired('#password'),
                Validation.minLength('#password', 6),
                Validation.isRequired('#password_confirmation'),
                Validation.isRequired('#province'),
                Validation.isRequired('input[name="gender"]'),
                Validation.minLength('#password_confirmation', 6,),
                Validation.isConfirmed('#password_confirmation', function () {
                    return document.querySelector('#form-1 #password').value;
                }),
            ],
            onSubmit: function (data) {
                //Call API
                console.log(data);
            }
        });
    </script>
</body>

</html>