# Task: Fix blog.php uneven blog cards & style pagination to match site

**Status: In Progress**

## Completed:
- [x] Analyzed files: blog.php, blog.css, header.php, blog_header/footer.php

## Completed:
- [x] Step 1: Added CSS link to blog.php
- [x] Step 2: Fixed cards - .blog-grid align-items: stretch; .blog-body justify/space-between + min-height; .blog-ex clamped to 3 lines
- [x] Step 3: Enhanced pagination - glow underline, shimmer hover, pulse anim on active/hover

## TODO:
- [ ] Step 4: Refresh browser to test even cards & styled pagination

# Previous: Blog list fixed. New Task: Make single blog post footers (cta-band + footer) fullwidth

## Completed:
- [x] Confirmed structure: blog_header opens .sec > .inner; blog_footer needs to close it before fullwidth sections

## Plan:
1. Edit blog_footer.php: Close containers before cta-band
2. Add CSS overrides in blog.css for fullwidth paddings
3. Test

## TODO:
- [ ] Step 1: Edit includes/blog_footer.php
- [ ] Step 2: Update blog.css
- [ ] Step 3: Complete

