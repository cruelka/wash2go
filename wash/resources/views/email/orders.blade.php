<html>

<head>
    <style>
        .mail {
            color: #111;
        }

        .mail__header-logo {
            width: 100px;
        }

        .mail__heading {
            color: #299e5b;
            font-size: 1.4em;
            font-weight: bold;
        }

        .mail__header {
            border-bottom: 5px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .mail__content {
            border-bottom: 5px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .mail__shop-item-img {
            width: 100px;
            margin-right: 15px;
        }

        .clear {
            clear: both;
        }

        .mail__shop-item-price {
            font-weight: bold;
            font-size: 1.2em;
        }

        .mail__f {
            padding-bottom: 15px;
        }

        .mail__shoplist {
            margin-top: 15px;
        }
    </style>
</head>
<body>
<div class="mail">
    <div class="mail__header">
        <img class="mail__header-logo" src="https://wash2go.ae/images/logo.svg" alt="logo">
    </div>
    <div class="mail__content">
        <div class="mail__heading">
            Hi {{$booking->user_name}}. Thank you for your order!
        </div>
        <div class="mail__subheading">
            Your order has been placed. You will be notified !
        </div>
        <div class="mail__shoplist">
            <table class="mail__shop-item">
                <tr>
                    <td>
                        <div class="mail__shop-item-title">{{$booking->service}}</div>
                        <div class="mail__shop-item-price">{{$booking->price}} AED</div>
                    </td>


                </tr>
            </table>
        </div>
    </div>
    <div class="mail__f">
        <div class="mail__heading">
            Need help?
        </div>
        <div class="mail__description">
            Your satisfaction is important to us, please don't hesitate to contact us if you have any questions.
            <br>
            Our Customer Service team will be more than happy to assist you.
        </div>
    </div>
    <div class="mail__desc-block">
        Kindly note that as an extra security precaution; you are kindly requested to ensure that the webpage you are redirected to from any email fromWash2go.ae is Wash2go.ae login page of your Wash2go.ae account
        <br><br>
        Wash2go.ae will never redirect you to enter any personal information anywhere other than in your Wash2go.ae account. Your cooperation in this protects your privacy and maintains the integrity of your transactions.
    </div>
</div>
</body>

</html>
