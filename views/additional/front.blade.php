@php
	//$backdate = isset($argv[2]) ? strtotime($argv[2]) : strtotime('-1 month');
	$backdate 	= BACK_DATE;
	$schedule 	= SHEDULE_DATE;
	$timestamp = date('Y-m-d\TH:i:s\Z', rand(strtotime($backdate), strtotime($schedule)));
@endphp
---
title: "{{ collect(['Sample', 'New', 'Ideas', 'Creative'])->random() }} {{ ucfirst($keyword) }} for {{ collect(['Ideas for 2021', 'Remodling Ideas', 'Renovation', 'Home Decor', ''])->random() }}"
date: {{ $timestamp }}
publishDate: {{ $timestamp }}
image: "{{ $image['url'] }}"
author: "{{ collect(['Roberto', 'Robert', 'Venus', 'Bruno', 'Frank', 'Valentino'])->random() }}" # use capitalize
description: "{{ $keyword }} {{ $sentences->shuffle()->take(2)->implode(' ') }}"
categories: ["{{ collect(['Chair And Furniture', 'Blog'])->random() }}"]
tags: ["{{ collect(['garden', 'indoor', 'interior', 'home decor', 'exterior'])->random() }}"]
keywords: "{{ ucfirst($keyword) }}"
draft: false

---
