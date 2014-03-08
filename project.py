from project_module import project_object, image_object, link_object, challenge_object

p = project_object('citadel', 'Citadel map')
p.domain = 'http://www.aidansean.com/'
p.path = 'cipher'
p.preview_image_ = image_object('http://placekitten.com.s3.amazonaws.com/homepage-samples/408/287.jpg', 408, 287)
p.github_repo_name = 'citadel'
p.mathjax = False
p.links.append(link_object(p.domain, 'citadel/', 'Live page'))
p.introduction = 'This page shows the map for my favourite game as a child, Citadel, published by Superior Software for the BBC Micro.'
p.overview = '''One day I intend to write a computer game inspired by Citadel.  It has some novel gameplay features which I haven't seen replicated since.'''
