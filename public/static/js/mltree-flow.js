// +----------------------------------------------------------------------
// | MlTreeForum [ THE BEST FORUM ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 https://mltree.top All rights reserved.
// +----------------------------------------------------------------------
// | Apache License v2 ( https://www.apache.org/licenses/LICENSE-2.0.html )
// +----------------------------------------------------------------------
// | Author: Kingsr <kingsrml@vip.qq.com>
// +----------------------------------------------------------------------

function mfFlow(type, _Id) {
    if (_Id == null) {
        _Id = 0;
    }
    this.type = type;
    this.flow = function(tid = 0) {
        if (type == 'index') {
            layui.use(['flow'], function() {
                var flow = layui.flow;
                var $ = layui.jquery;
                flow.load({
                    elem: '#topic-cps',
                    done: function(page, next) {
                        var list = [];
                        $.get(`/api/api/topiclist/page/${ page }/type/common/fid/${ _Id }`, function(res) {
                            layui.each(res.data, function(index, item) {
                                var html = `<li data-tid="${item.tid}" class="mdui-list-item mdui-ripple mtf-Jump"><div class="mdui-list-item-avatar">
                                <img src="${item.userData.avatar}" alt="${item.userData.username}" title="${item.userData.username}">
                                </div><div class="mdui-list-item-content">
                                <a class="mdui-list-item-title" href="/topic/${item.tid}.html">${item.subject + item.Badge}</a>
                                <div class="mdui-list-item-text mdui-list-item-one-line">${item.content}</div>
                                <div class="mdui-list-item-text">
                                <a href="/forum/${item.fid}" class="layui-badge layui-bg-blue" title="${item.forumName}">${item.forumName}</a> <a href="/user/${item.uid}.html">${item.userData.username}</a> 发表于
                                <span title="${item.create_time}">   ${item.time_format}</span>
                                <span class="mdui-float-right" >
                                <i class="mdui-icon material-icons">remove_red_eye</i>${item.views}</span>
                                <span class="mdui-float-right">
                                <i class="mdui-icon material-icons">comment</i>${item.comment}</span>
                                </div></div></li><li class="mdui-divider-inset mdui-m-y-0"></li>`
                                list.push(html);
                            })
                            next(list.join(''), page < res.pages);
                            $$('.mtf-Jump').on('click', function() {
                                console.log(this);
                                let data = $$.data(this);
                                window.location.href = `/topic/${data.tid}.html`
                            })
                        })
                    }
                })

                flow.load({
                    elem: '#topic-ess',
                    done: function(page, next) {
                        var list = [];
                        $.get(`/api/api/topiclist/page/${page}/type/essence/fid/${_Id}`, function(res) {
                            layui.each(res.data, function(index, item) {
                                var html = `<li data-tid="${item.tid}" class="mdui-list-item mdui-ripple mtf-Jump"><div class="mdui-list-item-avatar">
                                <img src="${item.userData.avatar}" alt="${item.userData.username}" title="${item.userData.username}">
                                </div><div class="mdui-list-item-content">
                                <a class="mdui-list-item-title" href="/topic/${item.tid}.html">${item.subject + item.Badge}</a>
                                <div class="mdui-list-item-text mdui-list-item-one-line">${item.content}</div>
                                <div class="mdui-list-item-text">
                                <a href="/forum/${item.fid}" class="layui-badge layui-bg-blue" title="${item.forumName}">${item.forumName}</a> <a href="/user/${item.uid}.html">${item.userData.username}</a> 发表于
                                <span title="${item.create_time}">   ${item.time_format}</span>
                                <span class="mdui-float-right" >
                                <i class="mdui-icon material-icons">remove_red_eye</i>${item.views}</span>
                                <span class="mdui-float-right">
                                <i class="mdui-icon material-icons">comment</i>${item.comment}</span>
                                </div></div></li><li class="mdui-divider-inset mdui-m-y-0"></li>`
                                list.push(html);
                            })
                            next(list.join(''), page < res.pages);
                            $$('.mtf-Jump').on('click', function() {
                                console.log(this);
                                let data = $$.data(this);
                                window.location.href = `/topic/${data.tid}.html`
                            })
                        })
                    }
                })

                flow.load({
                    elem: '#topic-ebook',
                    done: function(page, next) {
                        var list = [];
                        $.get(`/api/api/ebookList/page/${ page }/type/ebook/fid/${ _Id }`, function(res) {
                            layui.each(res.data, function(index, item) {
                                var html = `<div class="mdui-col-xs-6 mdui-col-sm-4">
                                        <div class="mdui-card-media">
                                            <a href="/ebook/${item.eid}.html" target='_block'>
                                                <img src="${item.images}" />
                                            </a>
                                            <h4 class="mdui-card-primary-title mdui-m-y-1" style="text-align: center;">${item.name + item.Badge}</h4>
                                            <p class="mdui-card-content layui-text">
                                                ${item.description}
                                            </p>
                                            <div class="mdui-card-primary-subtitle mdui-list-item-text">
                                                <a href="/forum/${item.fid}" class="layui-badge layui-bg-blue" title="${item.forumName}">${item.forumName}</a>
                                                <span class="mdui-float-right" >
                                                <i class="mdui-icon material-icons">remove_red_eye</i>${item.views}</span>
                                            </div>
                                        </div>
                                    </div>`;
                                list.push(html);
                            })
                            next(list.join(''), page < res.pages);
                        })
                    }
                })
            })
        } else if (type == 'comment') {

            layui.use(['flow'], function() {
                var flow = layui.flow;

                flow.load({
                    elem: '#mf-comments',
                    done: function(page, next) {
                        var list = [];
                        $.get(`/api/api/commentList/tid/${tid}/type/comment/page/${page}`, function(res) {
                            layui.each(res.data, function(index, item) {
                                var html = "";
                                var html = `<div id="reply-content-${item.cid}" class="mdui-card mf-comment">
                                    <div class="mf-comment-info mdui-valign mdui-typo">
                                    <img src="${item.avatar}" alt="${item.username}" class="avatar">
                                    <span class="mf-comment-line">${item.username}<br><small class="mf-comment-motto">${item.motto}</small></span>
                                    <span class="mf-comment-time" title="${item.create_time}">${item.time_format}</span></div>
                                    <div class="mf-comment-content">
                                    <div class="mf-comment-reply"></div>
                                    <div>${item.content}</div>
                                    <button title="Reply" onclick="recomment(${item.cid})" id="reply-${item.cid}" data-cid="${item.cid}" data-username="${item.username}" data-uid="${item.uid}" class="mdui-btn mdui-btn-icon mdui-btn-dense mdui-color-theme-accent mdui-ripple"><i class="mdui-icon material-icons">reply</i></button></div></div>`;
                                
                                list.push(html);
                            })
                            next(list.join(''), page <= res.pages);
                        })
                    }
                })
            })
        } else if (type == 'forum') {

        }

    }
    return this;
}