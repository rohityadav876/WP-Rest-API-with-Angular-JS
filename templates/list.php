<h1>{{page_title}}</h1>

<article ng-repeat="post in posts" class="post-list row post">
    <div class="col-md-5">
        <div class="post-thumbnail">
            <a ui-sref="detail({id: post.id})" href=""> <img src='{{post._embedded["wp:featuredmedia"][0].source_url}}'/> </a>
        </div>
        
<!--        <h3><a ui-sref="detail({id: post.id})">{{post.title.rendered}}</a></h3>
        <div ng-bind-html="post.excerpt.rendered | to_trusted"></div>
        
	<div ng-if="post.acf.name">
		<p>{{post.acf.name}}</p>
		<p>{{post.acf.title}}</p>
		<img ng-src="{{post.acf.image}}" />
	</div>-->
<!--	<div ng-if="!post.acf.name">No Name</div>-->
<a ui-sref="detail({id: post.id})" class="btn btn-primary btn-block">Read More</a>
    </div>
    <div class="col-md-7">
        <ul class="meta">
            <li>By <a href="{{post._embedded.author[0].link}}"> {{post._embedded.author[0].name}} </a> </li>
            <li>{{post.date |date : format : timezone}}</li>
            <li>
                <a href='{{post._embedded["wp:term"][0][0].link}}'> {{post._embedded["wp:term"][0][0].name}} </a> 
                <a href='{{post._embedded["wp:term"][0][1].link}}'> {{post._embedded["wp:term"][0][1].name}} </a> 
                <a href='{{post._embedded["wp:term"][0][2].link}}'> {{post._embedded["wp:term"][0][2].name}} </a> 
            </li>
        </ul>
        <h3><a ui-sref="detail({id: post.id})">{{post.title.rendered}}</a></h3>
<!--        <div ng-bind-html="post.content.rendered | to_trusted"></div>-->
        <div ng-bind-html="post.excerpt.rendered | to_trusted"></div>
        <a ui-sref="detail({id: post.id})" class="btn btn-primary btn-block">Read More</a>
<!--        <div ng-bind-html="{{post._embedded["wp:featuredmedia"][0].source_url}}"></div>-->
    </div>
</article>
