<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <meta name="description" content="我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。">
    <meta name="keywords" content="鸡汤,毒鸡汤,馊鸡汤">
    <meta property="og:description" content="我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="/css/min.css" rel="stylesheet">
    <!-- 引入样式 -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <!-- 引入组件库 -->
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
<div id="app">
    <div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999">
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="col">
                    <img src="/images/logo.png">
                </div>
                <div class="col">
                    <div class="float-right" style="padding-top: 0;">
                        <a class="btn btn-primary btn-filled btn-xs" href="https://github.com/BinZhiZhu/toxic-chicken-soup">Hyperf版毒鸡汤开源</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrapper" style="position: relative; top: -6vh;">
        <div class="container main-sentence justify-content-center text-center">
            <span id="sentence" style="font-size: 2rem;">@{{content}}</span>
        </div>
    </div>
    <div class="foot-1" style="position: absolute; bottom: 7vh;width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="lead text">截屏分享朋友</p>
                    <span class="btn btn-primary btn-filled btn-xs"><button class="btn btn-primary btn-filled btn-xs" @click="getSoulList()">再来一碗</button></span>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    new Vue({
        el: '#app',
        data() {
            return {
                title: '',
                content: '',
                fit: 'none',
            };
        },
        created: function () {
            this.getSoulList();
        },
        methods: {
            getSoulList() {
                let url = 'http://localhost:9501/soul/list';
                axios.post(url)
                    .then(response => {
                        const resp = response.data;
                        console.log('获取soulList结果', resp);
                        this.content = resp.content
                    })
                    .catch(error => {
                        console.log(error)
                    });
            }
        },
    });
</script>
</body>
</html>
