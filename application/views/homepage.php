<div class="row">
    {authors}
     <style>
        .span4 {
            border: 1px solid white;
            padding: 5px;
            text-align: center;
            width: 200px;
            display: inline-block;

        }
        .span4:hover {
             border: 1px solid black;
        }
    </style>
    <div class="span4">
        <a href="/welcome/show/{key}">
            <img src="/pix/{who}.jpg" title="{who} plays {role}"/>
        </a>
    </div>
    {/authors}
</div>