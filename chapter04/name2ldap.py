with open("linkedin.txt", "r") as fp:

    for name in iter(fp):
        first, last = name.strip().lower().split(" ")
        print first + "." + last # david.lightman
        print first + last       # davidlightman

        fl = first[0] + last
       	lf = last + first[0]
        print fl # dlightman
        print lf # lightmand

        print fl[:8]       # dlightma
        print fl[:7] + "2" # dlightm2
        print fl[:7] + "3" # dlightm2
        print lf[:8]       # davidlig
        print lf[:7] + "2" # davidli2
        print lf[:7] + "3" # davidli3
