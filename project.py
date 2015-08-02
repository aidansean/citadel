from project_module import project_object, image_object, link_object, challenge_object

p = project_object('citadel', 'Citadel map')
p.domain = 'http://www.aidansean.com/'
p.path = 'citadel'
p.preview_image    = image_object('%s/images/project.jpg'   %p.path, 150, 250)
p.preview_image_bw = image_object('%s/images/project_bw.jpg'%p.path, 150, 250)
p.folder_name = 'aidansean'
p.github_repo_name = 'citadel'
p.mathjax = False
p.tags = 'Games,Poster'
p.technologies = 'canvas,JavaScript,CSS,HTML,PHP'
p.links.append(link_object(p.domain, 'citadel/', 'Live page'))
p.introduction = 'This page shows the map for my favourite game as a child, Citadel, published by Superior Software for the BBC Micro.'
p.overview = '''One day I intend to write a computer game inspired by Citadel.  It has some novel gameplay features which I haven't seen replicated since.'''
