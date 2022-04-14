name: title
layout: true
class: center, middle, inverse



---
# **Slides** Demo


---
# Based on **ReMark**

Site here: https://remarkjs.com/

Source here: https://github.com/gnab/remark

Not been updated in a while, but simple to use and works well. Here it has been restyled and has a number of additional layouts (sequences, etc.) and features added.


---
# Big Title with **Highlighting**

---
## Sub-Title

---
### Sub-Sub-Title




---
# **Multiple** Titles

## Sub-Title

### Sub-Sub-Title



---
# Titles **One-by-One**

--
## Sub-Title

--
### Sub-Sub-Title



---
template: title

# **Text** Features


---
layout: false

## Text Features

Text can be shown with _emphasis_ and also **strong**.

It can also contain lists:
- First item in the list
- Second item
- And so on...

Text can also contain links like [this one](https://www.google.com), and footnotes can be added if needed.highlight[*]

.footnote[
  .highlight[*] Just like this one!
]



---
template: title

# Text **Sizing**

---
layout: false
class: center, middle

### Full screen content 

This text flows right across the page which has relatively small margins. It could be a little hard to read on large screens.


---
class: center, middle, larger

### Full screen content with a large text size

This text flows right across the page which has relatively small margins. It should be easy to read on large screens.


---
class: center, middle, larger, narrowish

### Bigger margins

This text flows right across the page which has larger-than-normal margins.


---
class: center, middle, narrow, larger

### Very big margins

This text flows right across the page which has pretty large margins.






---
template: title

# Slide **Colours** and **Backdrops**

---
layout: false
class: center, middle, larger, narrow, back-dark-red, text-yellow

The background and text colour of the slides can be easily changed.


---
class: center, middle, larger, narrow, back-black, highlight

A slide can use the standard 'highlight' colour for text...


---
class: center, middle, larger, narrow, back-highlight, text-white

... and also for the background.


---
class: center, middle, highlight
background-image: url('https://picsum.photos/800/600')

## Images can also be used for the background of the side


---
class: center, middle, blur, highlight
background-image: url('https://picsum.photos/800/600')

## The images can be blurred to aid reading text on top...


---
class: center, middle, blur-more, highlight
background-image: url('https://picsum.photos/800/600')

## ... can be blurred more...


---
class: center, middle, blur-lots, highlight
background-image: url('https://picsum.photos/800/600')

## ... or can be really blurred!

---
class: center, middle, grey, highlight
background-image: url('https://picsum.photos/800/600')

## Background images can also be greyed-out...


---
class: center, middle, grey, blur, highlight
background-image: url('https://picsum.photos/800/600')

## ... or both greyed and blurred







---
template: title

# Text **Positioning**

---
layout: false
class: center, top, larger, narrowish

### Align Top

The content of the slide can be easily positioned vertically


---
class: center, bottom, larger, narrowish

### Align Bottom

The content of the slide cna be easily positioned vertically


---
class: left, middle, larger, narrowish

### Align Left

Or horizontally


---
class: right, middle, larger, narrowish

### Align Right

Or horizontally


---
class: right, bottom, larger, narrowish

### Align Bottom Right

Or both





---
template: title

# **Images**

---
layout: false
class: center, middle

### A Large Image

![image](https://picsum.photos/2000/700)


---
class: center, middle

### A Large Image, Bordered

.bordered[![image](https://picsum.photos/2000/700)]


---
class: center, middle, with-columns

.columns[
 .column[
  .round[.bordered[![image](https://picsum.photos/300/300)]]
 ]

 .column[
  ### An image clipped to a circle
 ]
]

---
class: center, middle, with-columns

.columns[
 .column[
  ### An image clipped to a square
 ]

 .column[
  .square[.bordered[![image](https://picsum.photos/300/700)]]
 ]
]



---
template: title

# **Floating** Text and Images

---
layout: false

## Floating Text

.pull-left[.highlight[This text is floated left. This allows the other text to flow up into the remaining space.]]

The other text has been floated left and this text now sits to its right. The other text has been floated left and this text now sits to its right. The other text has been floated left and this text now sits to its right. The other text has been floated left and this text now sits to its right. The other text has been floated left and this text now sits to its right. The other text has been floated left and this text now sits to its right. The other text has been floated left and this text now sits to its right. The other text has been floated left and this text now sits to its right. The other text has been floated left and this text now sits to its right.

---
## Floating Image

.pull-right[![image](https://picsum.photos/800/400)]

The image has been floated right and this text now sits to its left. The image has been floated right and this text now sits to its left. The image has been floated right and this text now sits to its left. The image has been floated right and this text now sits to its left. The image has been floated right and this text now sits to its left. The image has been floated right and this text now sits to its left. The image has been floated right and this text now sits to its left. The image has been floated right and this text now sits to its left. The image has been floated right and this text now sits to its left.


---
## Floating Two Images

.pull-left[
  ### One to the Left

  ![image](https://picsum.photos/1000/600)
]

.pull-right[
  ### One to the Right

  ![image](https://picsum.photos/1000/601)
]






---
template: title

# **Sidebar** Layout

---
layout: false
class: with-sidebar

.sidebar[
  ### Sidebar

  This is the sidebar and this can contain headings, text, etc.

  It is a good place to introduce and describe the content found to the right.

]

## Sidebar Layout

This main content can be headings, text, images, steps or any combination of them.

This main content can be headings, text, images, steps or any combination of them.

This main content can be headings, text, images, steps or any combination of them.


---
class: with-sidebar

.sidebar[
  ### First Heading
]

## Multiple Headings

The sidebar, if it has multiple headings (h3) in it, will automatically highlight the last one...

---
class: with-sidebar

.sidebar[
  ### First Heading
  ### Second Heading
]

## Multiple Headings

The sidebar, if it has multiple headings (h3) in it, will automatically highlight the last one...

... so that a sequence of headings and content...


---
class: with-sidebar

.sidebar[
  ### First Heading
  ### Second Heading
  ### Third Heading
]

## Multiple Headings

The sidebar, if it has multiple headings (h3) in it, will automatically highlight the last one...

... so that a sequence of headings and content...

... can easly be shown, like this






---
template: title

# **Columns** Layout

---
layout: false
class: with-columns

### Column Layout (2 Cols - Default)

.columns[
 .column[
  ### Left Column

  This column can contain any text or images

  ![image](https://picsum.photos/600/300)
 ]

 .column[
  ### Right Column

  This column can contain any text or images

  ![image](https://picsum.photos/800/400)
 ]
]


---
layout: false
class: with-columns, three-columns

### Column Layout (3 Cols)

.columns[
 .column[
  ### Left Column

  This column can contain any text or images

  ![image](https://picsum.photos/600/300)
 ]

 .column[
  ### Middle Column

  This column can contain any text or images

  ![image](https://picsum.photos/700/350)
 ]

 .column[
  ### Right Column

  This column can contain any text or images

  ![image](https://picsum.photos/800/400)
 ]
]


---
layout: false
class: with-sidebar, with-columns, three-columns

.sidebar[
 ### Column Layout with Sidebar
]

.columns[
 .column[
  ### Left Column

  This column can contain any text or images

  ![image](https://picsum.photos/600/300)
 ]

 .column[
  ### Middle Column

  This column can contain any text or images

  ![image](https://picsum.photos/700/350)
 ]

 .column[
  ### Right Column

  This column can contain any text or images

  ![image](https://picsum.photos/800/400)
 ]
]








---
template: title

# Sequence of **Steps**

---
layout: false
class: with-sidebar

.sidebar[
  ## Steps

  Steps work well with a sidebar.

  A sequence of steps can be shown one-by-one...
]

.step[
  ### Step One

  This is the first thing that you have to do.
]

--
.step[
  ### Step Two

  This is the second thing that you have to do.
]

--
.step[
  ### Step Three

  This is the third thing that you have to do.
]

--
.step[
  ### Step Four

  This is the forth thing that you have to do.

  With some extra bits and bobs.
]


---

### Steps Also work on Full Slides

.step[
  ### Step One

  This is the first thing that you have to do.
]

.step[
  ### Step Two

  This is the second thing that you have to do.
]

.step[
  ### Step Three

  This is the third thing that you have to do.
]


---
layout: false
class: with-sidebar

.sidebar[
  ## Numbered Steps

  Each step can also be numbered...
]

.step[.numbered[
  ### Step One

  This is the first thing that you have to do.
]]

.step[.numbered[
  ### Step Two

  This is the second thing that you have to do.
]]

.step[.numbered[
  ### Step Three

  This is the third thing that you have to do.

  With some extra bits and bobs.
]]


---
layout: false
class: with-sidebar

.sidebar[
  ## Simple Steps

  The steps don't need to have headings.
]

.step[.numbered[
  This is the first thing that you have to do.
]]

.step[.numbered[
  This is the second thing that you have to do.
]]

.step[.numbered[
  This is the third thing that you have to do.
]]


---
layout: false
class: with-sidebar

.sidebar[
  ## Interrupted Steps

  The steps can have other text between.
]

.step[.numbered[
  This is the first thing that you have to do.
]]

.step[.numbered[
  This is the second thing that you have to do.
]]

This text sits between the steps.

.step[.numbered[
  This is the third thing that you have to do.
]]


---
layout: false
class: with-sidebar

.sidebar[
  ## Large Steps

  Steps can be made large...
]

.step[.large[.numbered[
  This is the first thing that you have to do.
]]]

.step[.large[.numbered[
  This is the second thing that you have to do.
]]]


---
layout: false
class: with-sidebar

.sidebar[
  ## Small Steps

  ... or small to fit more on
]

.step[.small[
  ### Step One

  This is the first thing that you have to do.
]]

.step[.small[
  ### Step Two

  This is the second thing that you have to do.
]]

.step[.small[
  ### Step Three

  This is the third thing that you have to do.
]]

.step[.small[
  ### Step Four

  This is the forth thing that you have to do.
]]

.step[.small[
  ### Step Five

  This is the fifth thing that you have to do.
]]


---
layout: false
class: with-sidebar

.sidebar[
  ## Huge Steps

  These can be used when just showing one step per slide
]

.step[.step-one[.huge[
  ### Step One

  This is the first thing you need to do
]]]


---
layout: false
class: with-sidebar

.sidebar[
  ## Huge Steps

  These can be used when just showing one step per slide
]

.step[.step-two[.huge[
  ### Step Two

  This is the second thing you need to do
]]]






---
class: middle

### Flowchart


.flowchart[
 .step[
   ### Step One

   This is the first topic or note.
 ]

 .step[
   ### Step Two

   This is the second topic or note.
 ]

 .step[
   ### Step Three

   This is the third topic or note.
 ]

 .step[
   ### Step Four

   This is the forth topic or note.
 ]
]


---
class: middle, inverse

### Flowchart

This one is set to small text.

.small[.flowchart[
 .step[
   ### Step One

   This is the first topic or note.
 ]

 .step[
   ### Step Two

   This is the second topic or note.
 ]

 .step[
   ### Step Three

   This is the third topic or note.
 ]

 .step[
   ### Step Four

   This is the forth topic or note.
 ]
]]


---
class: middle, inverse

### Flowchart

This one is set to large text.

.large[.flowchart[

 .step[
   ### Step One

   This is the first topic or note.
 ]

 .step[
   ### Step Two

   This is the second topic or note.
 ]

 .step[
   ### Step Three

   This is the third topic or note.
 ]

]]









---
template: title

# **Tiled** Layout

---
layout: false
class: tiled

### Tiled Layout (3 Cols - Default)

.tiles[
 .tile[
   ### One

   This is the first topic or note. Tiles sit side-by-side with each other.
 ]

 .tile[
   ### Two

   This is the second topic or note. Tiles sit side-by-side with each other.
 ]

 .tile[.highlight[
   ### Three

   This is the third topic or note. Tiles sit side-by-side with each other.
 ]]
]

---
layout: false
class: tiled, two-columns

### Tiled Layout (2 Cols)

.tiles[
 .tile[
   ### One

   This is the first topic or note. Tiles sit side-by-side with each other.
 ]

 .tile[
   ### Two

   This is the second topic or note. Tiles sit side-by-side with each other.
 ]

 .tile[
   ### Three

   This is the third topic or note. Tiles sit side-by-side with each other.
 ]

 .tile[.highlight[
   ### Four

   This is the forth topic or note. Tiles sit side-by-side with each other.
 ]]
]

---
layout: false
class: tiled, four-columns

### Tiled Layout (4 Cols)

.tiles[
 .tile[
   ### One

   This is the first topic or note. Tiles sit side-by-side with each other.
 ]

 .tile[
   ### Two

   This is the second topic or note. Tiles sit side-by-side with each other.
 ]

 .tile[
   ### Three

   This is the third topic or note. Tiles sit side-by-side with each other.
 ]

 .tile[.highlight[
   ### Four

   This is the forth topic or note. Tiles sit side-by-side with each other.
 ]]
]

---
class: tiled

### Coloured Tiles

Tiles can be individually coloured

.tiles[
 .tile[.back-highlight[
   ### Highlighted

   This is the first topic or note. Tiles sit side-by-side with each other.
 ]]

 .tile[.back-dark-teal[.text-yellow[
   ### Colours Galore

   This is the second topic or note. Tiles sit side-by-side with each other.
 ]]]

 .tile[.highlight[
   ### Highlighted Text

   This is the third topic or note. Tiles sit side-by-side with each other.
 ]]
]


---
class: tiled, inverse

### Tiles with Images

Tiles can contain images as well as text

.tiles[
 .tile[
   ![image](https://picsum.photos/800/600)

   This is the first tile.
 ]

.tile[
   ![image](https://picsum.photos/1000/750)

   This is the second tile.
 ]

.tile[
   ![image](https://picsum.photos/600/450)

   This is the third tile.
 ]
]


---
class: tiled, inverse

### Small Tiles

.small[.tiles[

 .tile[.back-red[
   ### One

   This is the first thing that you have to do.
 ]]

 .tile[.back-orange[
   ### Two

   This is the second thing that you have to do.
 ]]

 .tile[.back-yellow[
   ### Three

   This is the third thing that you have to do.
 ]]

 .tile[.back-green[
   ### Four

   This is the forth thing that you have to do.
 ]]

 .tile[.back-cyan[
   ### Five

   This is the fifth thing that you have to do.
 ]]

 .tile[.back-blue[
   ### Six

   This is the sixth thing that you have to do.
 ]]

 .tile[.back-purple[
   ### Seven

   This is the seventh thing that you have to do.
 ]]

 .tile[.back-pink[
   ### Eight

   This is the eighth thing that you have to do.
 ]]

 .tile[.highlight[
   ### Nine

   This is the nineth thing that you have to do.
 ]]
]]


---
class: tiled, inverse

### Small Tiles (darker colours)

.small[.tiles[

 .tile[.back-dark-red[
   ### One

   This is the first thing that you have to do.
 ]]

 .tile[.back-dark-orange[
   ### Two

   This is the second thing that you have to do.
 ]]

 .tile[.back-dark-yellow[
   ### Three

   This is the third thing that you have to do.
 ]]

 .tile[.back-dark-green[
   ### Four

   This is the forth thing that you have to do.
 ]]

 .tile[.back-dark-cyan[
   ### Five

   This is the fifth thing that you have to do.
 ]]

 .tile[.back-dark-blue[
   ### Six

   This is the sixth thing that you have to do.
 ]]

 .tile[.back-dark-purple[
   ### Seven

   This is the seventh thing that you have to do.
 ]]

 .tile[.back-dark-pink[
   ### Eight

   This is the eighth thing that you have to do.
 ]]

 .tile[.highlight[
   ### Nine

   This is the nineth thing that you have to do.
 ]]
]]

---
class: tiled, inverse, blur
background-image: url('https://picsum.photos/800/600')

.small[.tiles[

 .tile[.back-dark-red[
   ### One

   This is the first thing that you have to do.
 ]]

 .tile[.back-dark-orange[
   ### Two

   This is the second thing that you have to do.
 ]]

 .tile[.back-dark-yellow[
   ### Three

   This is the third thing that you have to do.
 ]]

 .tile[.back-dark-green[
   ### Four

   This is the forth thing that you have to do.
 ]]

 .tile[.back-dark-cyan[
   ### Five

   This is the fifth thing that you have to do.
 ]]

 .tile[.back-dark-blue[
   ### Six

   This is the sixth thing that you have to do.
 ]]

 .tile[.back-dark-purple[
   ### Seven

   This is the seventh thing that you have to do.
 ]]

 .tile[.back-dark-pink[
   ### Eight

   This is the eighth thing that you have to do.
 ]]

 .tile[.highlight[
   ### Nine

   This is the nineth thing that you have to do.
 ]]

]]


---
class: with-sidebar, tiled

.sidebar[
  ## Tiles with Sidebar

  Tiles can sit within a with-sidebar layout.

  They can also contain other layouts, like a sequence of steps
]

.tiles[
 .tile[
   ### First

   This is a little tile.
 ]

 .tile[
   ### Second

   This is a little tile.
 ]

 .tile[
   ### Third

   This is a little tile.
 ]

 .tile[
   ### Forth

   This is a little tile.

   This is a second sentence.
 ]

 .tile[
   ### Fifth

   This is a little tile with a bit more text inside it.
 ]

 .tile[
   ### Sixth

   .step[Step One]
   .step[Step Two]
   .step[Step Three]
 ]
]






---
template: title

# **Code** Snippets



---
class: with-sidebar

.sidebar[
  ## Code Snippet

  ### Syntax Colouring
]


```html
<!doctype html>

<html>

  <head>
    <meta charset="utf-8">
    <title>TITLE GOES HERE</title>
  </head>

  <body>
    PAGE CONTENT GOES HERE
  </body>

</html>
```


---
class: with-sidebar code-numbering

.sidebar[
  ## Code Snippet

  ### Line Numbering
]


```html
<!doctype html>

<html>

  <head>
    <meta charset="utf-8">
    <title>TITLE GOES HERE</title>
  </head>

  <body>
    PAGE CONTENT GOES HERE
  </body>

</html>
```


---
class: with-sidebar

.sidebar[
  ## Code Snippet

  This snippet is shown as a sequence of blocks of code, each one adding to the previous.
]


```html
<!doctype html>
```

--

```html
<html>

  <head>
    <meta charset="utf-8">
    <title>TITLE GOES HERE</title>
  </head>
```

--

```html
  <body>
    PAGE CONTENT GOES HERE
  </body>

</html>
```


---
class: with-sidebar, code-highlighting, fragmented

.sidebar[
  ## Code Snippet

  This also shows up as a sequence of blocks, but each one is **highlighted** as it appears.
]


```html
<!doctype html>
```

--

```html
<html>

  <head>
    <meta charset="utf-8">
    <title>TITLE GOES HERE</title>
  </head>
```

--

```html
  <body>
    PAGE CONTENT GOES HERE
  </body>

</html>
```






---
class: with-sidebar, code-highlighting

.sidebar[
  ## Code Snippet

  This snippet of code has different lines highlighted in a sequence.
]


```html
*<!doctype html>

<html>

  <head>
    <meta charset="utf-8">
    <title>TITLE GOES HERE</title>
  </head>

  <body>
    PAGE CONTENT GOES HERE
  </body>

</html>
```


---
class: with-sidebar, code-highlighting

.sidebar[
  ## Code Snippet

  This snippet of code has different lines highlighted in a sequence.
]


```html
<!doctype html>

<html>

* <head>
*   <meta charset="utf-8">
*   <title>TITLE GOES HERE</title>
* </head>

  <body>
    PAGE CONTENT GOES HERE
  </body>

</html>
```


---
class: with-sidebar, code-highlighting

.sidebar[
  ## Code Snippet

  This snippet of code has different lines highlighted in a sequence.
]


```html
<!doctype html>

<html>

  <head>
    <meta charset="utf-8">
    <title>TITLE GOES HERE</title>
  </head>

* <body>
*   PAGE CONTENT GOES HERE
* </body>

</html>
```




---
class: with-sidebar, code-highlighting

.sidebar[
  ## Code Building

  This code is built, part-by-part, **highlighting** the new lines as they appear.
]


```html
*<!doctype html>
```

---
class: with-sidebar, code-highlighting

.sidebar[
  ## Code Building

  This code is built, part-by-part, **highlighting** the new lines as they appear.
]


```html
<!doctype html>

*<html>
*
*
*</html>
```

---
class: with-sidebar, code-highlighting

.sidebar[
  ## Code Building

  This code is built, part-by-part, **highlighting** the new lines as they appear.
]


```html
<!doctype html>

<html>

* <head>
*
* </head>

</html>
```

---
class: with-sidebar, code-highlighting

.sidebar[
  ## Code Building

  This code is built, part-by-part, **highlighting** the new lines as they appear.
]


```html
<!doctype html>

<html>

* <head>
*
* </head>

* <body>
*
* </body>

</html>
```

---
class: with-sidebar, code-highlighting

.sidebar[
  ## Code Building

  This code is built, part-by-part, **highlighting** the new lines as they appear.
]


```html
<!doctype html>

<html>

* <head>
*   <meta charset="utf-8">
* </head>

  <body>

  </body>

</html>
```

---
class: with-sidebar, code-highlighting

.sidebar[
  ## Code Building

  This code is built, part-by-part, **highlighting** the new lines as they appear.
]


```html
<!doctype html>

<html>

* <head>
    <meta charset="utf-8">
*   <title>TITLE GOES HERE</title>
* </head>

  <body>

  </body>

</html>
```

---
class: with-sidebar, code-highlighting

.sidebar[
  ## Code Building

  This code is built, part-by-part, **highlighting** the new lines as they appear.
]


```html
<!doctype html>

<html>

  <head>
    <meta charset="utf-8">
    <title>TITLE GOES HERE</title>
  </head>

* <body>
*   PAGE CONTENT GOES HERE
* </body>

</html>
```

---
class: with-sidebar

.sidebar[
  ## Code Building

  This code is built, part-by-part, **highlighting** the new lines as they appear.
]


```html
<!doctype html>

<html>

  <head>
    <meta charset="utf-8">
    <title>TITLE GOES HERE</title>
  </head>

  <body>
    PAGE CONTENT GOES HERE
  </body>

</html>
```


---
class: with-sidebar

.sidebar[
  ## Languages

  Syntax highlight for a range of languages.
]


```css
.sidebar h2 { font-size: 2em; }
.sidebar h3 { font-size: 1.6em; }

.sidebar h2,
.sidebar h3 {
  color: var(--text-low);
}

.sidebar h2:last-of-type,
.sidebar h3:last-child {
  color: var(--text-normal);
}
```


---
class: with-sidebar, inverse

.sidebar[
  ## Languages

  Syntax highlight for a range of languages.
]


```css
.sidebar h2 { font-size: 2em; }
.sidebar h3 { font-size: 1.6em; }

.sidebar h2,
.sidebar h3 {
  color: var(--text-low);
}

.sidebar h2:last-of-type,
.sidebar h3:last-child {
  color: var(--text-normal);
}
```


---
class: code-highlighting

### Large Code

.larger[
```css
.sidebar h2 { font-size: 2em; }

*.sidebar h3 {
* color: var(--text-low);
*}
```
]


---
### Huge Code

.huge[
```basic
10 PRINT "Hello World"
20 GOTO 10
```
]


---
## Inline Code

Inline `code` is easy to display.

The code can be displayed simply: `while True:`, or it can be highlighted: _`print( "Dave" )`_ (em) or __`for( $i=0; $i<10; $i++ )`__ (strong) or .highlight[`body { display: flex; }`] (highlight) or .back-highlight[`<!doctype html>`] (back highlight).


---
class: inverse

## Inline Code

Inline `code` is easy to display.

The code can be displayed simply: `while True:`, or it can be highlighted: _`print( "Dave" )`_ (em) or __`for( $i=0; $i<10; $i++ )`__ (strong) or .highlight[`body { display: flex; }`] (highlight) or .back-highlight[`<!doctype html>`] (back highlight).






---
template: title

# Code **Demos** in 'Browsers'


---
### Code Snippet Demo

You can show some code to the left, with a 'preview' to the right...

.pull-left[
```css
body {

}

h1 {

}
```
]

.pull-right[.demo[
  <div class="body" style="">

   <h1 style="">Hello</h1>

   <p>Lorem ipsum dolor sit amet, nulla suavitate adipiscing ea eos, sit ei recusabo persecuti. Sumo nominati sed eu.</p>

   <p>Usu an nobis tincidunt instructior, vis latine probatus cu. Ut nec ridens labores, ne adhuc nonumes scripserit sit, persius fabellas ad eos.</p>

  </div>
]]


---
class: code-highlighting

### Code Snippet Demo

... then highlight the effect as new styling is applied...

.pull-left[
```css
*body {
* font-family: sans-serif;
*}

h1 {

}
```
]

.pull-right[.demo[
  .focus[
  <div class="body" style="font-family: sans-serif;">

   <h1 style="">Hello</h1>

   <p>Lorem ipsum dolor sit amet, nulla suavitate adipiscing ea eos, sit ei recusabo persecuti. Sumo nominati sed eu.</p>

   <p>Usu an nobis tincidunt instructior, vis latine probatus cu. Ut nec ridens labores, ne adhuc nonumes scripserit sit, persius fabellas ad eos.</p>

  </div>
  ]
]]


---
class: code-highlighting

### Code Snippet Demo

... then highlight the effect as new styling is applied...

.pull-left[
```css
body {
  font-family: sans-serif;
}

*h1 {
* font-size: 3em;
* color: #336699;
*}
```
]

.pull-right[.demo[
  <div class="body" style="font-family: sans-serif;">

   .focus[
   <h1 style="font-size: 3em; color: #336699;">Hello</h1>
   ]

   <p>Lorem ipsum dolor sit amet, nulla suavitate adipiscing ea eos, sit ei recusabo persecuti. Sumo nominati sed eu.</p>

   <p>Usu an nobis tincidunt instructior, vis latine probatus cu. Ut nec ridens labores, ne adhuc nonumes scripserit sit, persius fabellas ad eos.</p>

  </div>
]]


---
### Code Snippet Demo with a Mobile View

.pull-left[
```css
body {
  font-family: sans-serif;
}

h1 {
  font-size: 3em;
  color: #336699;
}
```
]

.pull-right[.mobile[.demo[
  <div class="body" style="font-family: sans-serif;">

   <h1 style="font-size: 3em; color: #336699;">Hello</h1>

   <p>Lorem ipsum dolor sit amet, nulla suavitate adipiscing ea eos, sit ei recusabo persecuti. Sumo nominati sed eu.</p>

   <img src="https://picsum.photos/120/100">

   <p>Usu an nobis tincidunt instructior, vis latine probatus cu. Ut nec ridens labores, ne adhuc nonumes scripserit sit, persius fabellas ad eos.</p>

  </div>
]]]


---
.pull-left[

### Code Snippet Demo

Here's a full-height 'mobile' view...

```css
body {
  font-family: sans-serif;
}

h1 {
  font-size: 3em;
  color: #336699;
}
```
]

.pull-right[.mobile[.demo[
  <div class="body" style="font-family: sans-serif;">

   <h1 style="font-size: 3em; color: #336699;">Hello</h1>

   <p>Lorem ipsum dolor sit amet, nulla suavitate adipiscing ea eos, sit ei recusabo persecuti. Sumo nominati sed eu.</p>

   <img src="https://picsum.photos/120/100">

   <p>Usu an nobis tincidunt instructior, vis latine probatus cu. Ut nec ridens labores, ne adhuc nonumes scripserit sit, persius fabellas ad eos.</p>

  </div>
]]]


---
.pull-left[

### Code Snippet Demo

Here's a full-height 'mobile' view...

```css
body {
  font-family: sans-serif;
* background: #003366;
* color: white;
}

h1 {
  font-size: 3em;
* color: yellow;
}
```
]

.pull-right[.mobile[.demo[
  <div class="body" style="font-family: sans-serif; background: #003366; color: white;">

   <h1 style="font-size: 3em; color: yellow;">Hello</h1>

   <p>Lorem ipsum dolor sit amet, nulla suavitate adipiscing ea eos, sit ei recusabo persecuti. Sumo nominati sed eu.</p>

   .bordered[<img src="https://picsum.photos/120/100">]

   <p>Usu an nobis tincidunt instructior, vis latine probatus cu. Ut nec ridens labores, ne adhuc nonumes scripserit sit, persius fabellas ad eos.</p>

  </div>
]]]



---
class: with-sidebar

.sidebar[
  ## Browser Demo

  Here's an example with a lot of different tags in use.
]

.demo[
<div class="body" style="font-family: sans-serif;">

 <h2>Hello</h1>

 <p>Lorem ipsum dolor sit amet, nulla suavitate adipiscing ea eos.</p>

 <ul>
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
 </ul>

 <table>
  <tr> <th>A</th>     <th>B</th>    </tr>
  <tr> <td>One</td>   <td>Two</td>  </tr>
  <tr> <td>Three</td> <td>Four</td> </tr>
 </table>

 <p>Usu an nobis tincidunt instructior, vis latine probatus cu.</p>
 
 <img src="https://picsum.photos/500/160">

</div>
]


---
class: center, middle

## The following slides show full-screen previews...

---
class: center, middle

.demo[
<div class="body" style="font-family: sans-serif;">

 <h2>Hello</h1>

 <p>Lorem ipsum dolor sit amet, nulla suavitate adipiscing ea eos.</p>

 <ul>
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
 </ul>

 <table>
  <tr> <th>A</th>     <th>B</th>    </tr>
  <tr> <td>One</td>   <td>Two</td>  </tr>
  <tr> <td>Three</td> <td>Four</td> </tr>
 </table>

 <p>Usu an nobis tincidunt instructior, vis latine probatus cu.</p>
 
 <img src="https://picsum.photos/500/160">

</div>
]


---
class: center, middle

.mobile[.demo[
<div class="body" style="font-family: sans-serif;">

 <h2>Hello</h1>

 <p>Lorem ipsum dolor sit amet, nulla suavitate adipiscing ea eos.</p>

 <ul>
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
 </ul>

 <table>
  <tr> <th>A</th>     <th>B</th>    </tr>
  <tr> <td>One</td>   <td>Two</td>  </tr>
  <tr> <td>Three</td> <td>Four</td> </tr>
 </table>

 <p>Usu an nobis tincidunt instructior, vis latine probatus cu.</p>
 
 <img src="https://picsum.photos/500/160">

</div>
]]






---
template: title

# .larger[.text-red[❤]]

## That's it!
