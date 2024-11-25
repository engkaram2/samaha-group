<style>
    .chat
    {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .chat li
    {
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px dotted #B3A9A9;
    }

    .chat li.left .chat-body
    {
        margin-left: 60px;
    }

    .chat li.right .chat-body
    {
        margin-right: 60px;
    }


    .chat li .chat-body p
    {
        margin: 0;
        color: #777777;
    }

    .panel .slidedown .glyphicon, .chat .glyphicon
    {
        margin-right: 5px;
    }

    .panel-body
    {
        overflow-y: scroll;
        height: 250px;
    }

    ::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar
    {
        width: 12px;
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar-thumb
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555;
    }

    .btn-warning {
        background-color: #f0ad4e;
        border-color: #eea236;
    }
</style>


<style>
    .chatCard_one {
        width: fit-content;
        position: relative;
        padding: 15px;
        background: rgba(241, 244, 251, 0.70);
        border-radius: 10px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        margin-top: 16px;
        margin-bottom: 6px;
    }
    .chatCard_one p {
        color: #1E1E1E;
        font-size: 14px;
        font-weight: 400;
        line-height: 32px;
    }
    .accepted_msg {
        background-color: rgba(0, 51, 114, 0.7);
        border-radius: 30px 10px 10px 30px;
        -webkit-border-radius: 30px 10px 10px 30px;
        -moz-border-radius: 30px 10px 10px 30px;
        -ms-border-radius: 30px 10px 10px 30px;
        -o-border-radius: 30px 10px 10px 30px;
    }
    .accepted_msg p{
        color: #fff;
    }
    .msgAbs_span {
        display: block;
        width: fit-content;
        color: #8E8EA9;
        font-size: 13px;
        font-weight: 400;
        margin-bottom: 16px;
    }
    .mxST_auto {
        margin-inline-start: auto;
    }
    .mxEnd_auto {
        margin-inline-end: auto;
    }
</style>
