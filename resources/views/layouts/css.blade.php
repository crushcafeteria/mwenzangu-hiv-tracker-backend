<style>
    .blog-wrap {
        font-family: 'Open Sans', sans-serif;
        padding: 60px 0;
    }
    .blog-left {
        padding-right: 40px;
    }
    .blog-post + .blog-post {
        margin-top: 35px;
    }
    .blog-post .content {
        padding-top: 25px;
    }
    .blog-post .content h3.title {
        font-weight: 500;
        margin-bottom: 10px;
        font-size: 22px;
    }
    .blog-post .content h3.title a {
        color: #000;
        text-decoration: none;
    }
    .featured-post img {
        width: 100%;
        border-radius: 10px;
    }
    .meta-post {
        padding: 0;
        margin: 0 0 20px;
        list-style: none;
        font-size: 13px;
    }
    .meta-post li {
        display: inline-block;
        margin-right: 15px;
    }
    .meta-post li a {
        color: #8c8c8c;
        text-decoration: none;
    }
    .entry-post {
        font-size: 14px;
    }
    .read-more-btn {
        display: inline-block;
        width: 160px;
        padding-left: 0;
        line-height: 42px;
        height: 44px;
        border: 2px solid #e5e5e5;
        border-radius: 40px;
        font-size: 14px;
        font-weight: 500;
        color: #2d2d2d;
        text-align: center;
        position: relative;
        z-index: 9;
        overflow: hidden;
        text-decoration: none;
    }
    .read-more-btn:hover,
    .read-more-btn:focus {
        color: #fff;
        text-decoration: none;
    }
    .read-more-btn:before {
        content: '';
        position: absolute;
        background: #f28b00;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        z-index: -1;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: 0 50%;
        transform-origin: 0 50%;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }
    .read-more-btn:hover:before {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
        -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    }
    .more-link {
        margin-top: 22px;
    }
    .sidebar .widget {
        margin-bottom: 36px;
    }
    .widget-search form input {
        height: 40px;
        border: none;
        background: #f5f5f5;
        border-radius: 25px;
        padding: 0 20px;
        width: 100%;
        font-size: 13px;
    }
    .sidebar .widget .widget-title h3 {
        font-size: 20px;
        font-weight: 500;
        color: #2d2d2d;
        padding-bottom: 15px;
        margin-bottom: 22px;
        border-bottom: 1px solid #e5e5e5;
        position: relative;
    }
    .widget-categories > ul.cat-list {
        list-style: none;
        padding-left: 0;
    }
    .widget-categories > ul.cat-list > li {
        margin-bottom: 15px;
        font-weight: 400;
    }
    .widget-categories > ul.cat-list > li > a {
        color: #484848;
        position: relative;
        font-size: 12px;
        text-decoration: none;
    }
    .widget-categories > ul.cat-list > li > a .fas {
        font-size: 10px;
        margin-right: 9px;
        color: #989898;
    }
    .widget-tags ul.tag-list {
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .widget-tags ul.tag-list li {
        margin: 0 0 10px;
        display: inline-block;
    }
    .widget-tags ul.tag-list li a {
        display: inline-block;
        padding: 5px 15px;
        color: #8c8c8c;
        font-size: 12px;
        background-color: #f5f5f5;
        border-radius: 30px;
        text-decoration: none;
    }

    .blog-pagination {
        text-align: center;
        margin-top: 40px;
    }
    .blog-pagination ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .blog-pagination ul li {
        display: inline-block;
        padding: 0 5px;
    }
    .blog-pagination ul li a {
        width: 45px;
        height: 45px;
        border-radius: 45px;
        display: block;
        border: solid 2px #e5e5e5;
        line-height: 42px;
        color: #32466a;
        text-decoration: none;
        font-size: 14px;
    }
    .blog-pagination ul li.prev a,
    .blog-pagination ul li.next a {
        color: #f28b00;
    }
    .blog-pagination ul li.active a {
        background: #f28b00;
        border-color: #f28b00;
        color: #fff;
    }

    /**Blog2**/
    .bolg-post-list {
        padding: 0;
        margin: 0 -10px;
        list-style: none;
        display: flex;
        flex-wrap: wrap;
    }
    .bolg-post-list>li {
        padding: 0 10px;
        width: 50%;
        margin-bottom: 25px;
    }

</style>
