<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Calculator</title>
    <link rel="stylesheet" href="styless.css">
    <script src="jquery.js"></script>
</head>
<body>

    <div class="container">
        <form action="action.php" method="POST" class="myForm">
            <div class="text-con">
                <input type="text" class="input-1" name="text-con" id="text-con" maxlength="16" readonly>
                <input type="text" class="input-2" name="ans-con" id="ans-con" maxlength="16" readonly>
            </div>
            <div class="button-con">
                <div class="btn-holder">
                    <input type="button" class="num" name ="num1" id="num1" value="1" readonly>
                    <input type="button"  class="num" name ="num2" id="num2" value="2" readonly>
                    <input type="button" class="num" name = "num3" id="num3" value="3" readonly>
                    <input type="button" class="key-sign num"  value="+" readonly>
                </div>
                <div class="btn-holder">
                    <input type="button" class="num" name = "num4" id="num4" value="4" readonly>
                    <input type="button" class="num" name = "num5" id="num5" value="5" readonly>
                    <input type="button" class="num" name = "num6" id="num6" value="6" readonly>
                    <input type="button" class="key-sign num" value="-" readonly>
                </div>
                <div class="btn-holder">
                    <input type="button" class="num" name = "num7" id="num7" value="7" readonly>
                    <input type="button" class="num" name = "num8" id="num8" value="8" readonly>
                    <input type="button"  class="num" name = "num9" id="num9" value="9" readonly>
                    <input type="button" class="key-sign num" value="/" readonly>
                </div>
                <div class="btn-holder">
                    <input type="button" class="key-sign num" value="*" readonly>
                    <input type="button" class="num" name = "num0" id="num0" value="0" readonly>
                    <input type="reset" class="reset"  value="c" readonly>
                    <!-- <input type="submit" class="submit" value="="> -->
                    <button type="submit" class="submit" name = "submit">=</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        //picks and submits form inputs
        $(document).ready(function(){
            $('form.myForm').on('submit', function(){

                var that = $(this),
                    url = that.attr('action'),
                    type = that.attr('method'),
                    data = {};

                that.find('[name]').each(function(index, value) {
                    var that = $(this),
                        name = that.attr('name'),
                        value = that.val();

                    data[name] = value;
                });

                $.ajax({
                    url: url,
                    type: type,
                    data: data,

                    success: function(response)
                    {
                        if($('#ans-con') != ""){
                            $('#ans-con').val("")
                            $('#ans-con').val(
                            $('#ans-con').val() + response)
                        }
                    }
                });
                return false;
            });
        });
    </script>
    <script src='script.js'></script>
</body>
</html>