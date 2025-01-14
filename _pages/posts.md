---
layout: single
author_profile: true
title: posts
permalink: /posts/
sidebar:
  nav: "sidenav"
---
<ul>
  {% for post in site.posts %}
    <li>
      <a href="{{ post.url }}">{{ post.title }}</a>
    </li>
  {% endfor %}
</ul>
