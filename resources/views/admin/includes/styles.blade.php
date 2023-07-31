@stack('before-styles')
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="{{ asset('admin/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('admin/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('admin/css/components.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('admin/css/colors.min.css') }}" rel="stylesheet" type="text/css">
<style>
    .tags {
        list-style: none;
        margin: 0;
        overflow: hidden;
        padding: 0;
    }

    .tags li {
        float: left;
    }

    .tag {
        background: #eee;
        border-radius: 5px;
        color: #313131;
        font-size: 14px;
        display: inline-block;
        height: 26px;
        line-height: 26px;
        padding: 0 20px 0 23px;
        position: relative;
        margin: 0 10px 10px 0;
        text-decoration: none;
        -webkit-transition: color 0.2s;
    }

    .tag::before {
        background: #fff;
        border-radius: 10px;
        box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
        content: '';
        height: 6px;
        left: 10px;
        position: absolute;
        width: 6px;
        top: 10px;
    }

    .tag::after {
        background: #fff;
        border-bottom: 13px solid transparent;
        border-left: 10px solid #eee;
        border-top: 13px solid transparent;
        content: '';
        position: absolute;
        right: 0;
        top: 0;
    }

    .tag:hover {
        background-color: #00a0eb;
        color: white;
    }

    .tag:hover::after {
        border-left-color: #00a0eb;
    }
    .error{
        color:red;
        padding: 0px;
    }
</style>
@stack('after-stack')
