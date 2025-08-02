
# 📚 HTML TAGS LIST

## 📌 Table of Contents

* [Scripting & Metadata](#scripting--metadata)
* [Basic Structure Tags](#basic-structure-tags)
* [Content Sectioning](#content-sectioning-tags)
* [Text Formatting](#text-formatting-tags)
* [List Tags](#list-tags)
* [Forms & Input Tags](#forms-and-input-tags)
* [Table Tags](#table-tags)
* [Media & Embedding](#media--embedding-tags)
* [Obsolete/Deprecated Tags](#obsolete-or-deprecated-tags)

---

## 🧠 Scripting & Metadata

| Tag            | Description                                    |
| -------------- | ---------------------------------------------- |
| `<!-- ... -->` | HTML comment.                                  |
| `<!DOCTYPE>`   | Declares the document type (e.g., HTML5).      |
| `<script>`     | Defines JavaScript code.                       |
| `<noscript>`   | Content for browsers with JS disabled.         |
| `<style>`      | Embeds internal CSS.                           |
| `<link>`       | Links external resources (CSS, favicon, etc.). |
| `<meta>`       | Sets metadata like charset, viewport.          |
| `<base>`       | Sets base URL for all relative links.          |

---

## 🏗️ Basic Structure Tags

| Tag       | Description                       |
| --------- | --------------------------------- |
| `<html>`  | Root of the HTML document.        |
| `<head>`  | Container for metadata.           |
| `<title>` | Sets page title (shown in tab).   |
| `<body>`  | Main visible content of the page. |

---

## 📦 Content Sectioning Tags

| Tag           | Description                                 |
| ------------- | ------------------------------------------- |
| `<header>`    | Intro content or navigation.                |
| `<footer>`    | Footer content.                             |
| `<main>`      | Main content of the document.               |
| `<nav>`       | Navigation links.                           |
| `<article>`   | Self-contained content.                     |
| `<aside>`     | Sidebar or complementary content.           |
| `<section>`   | Thematic grouping of content.               |
| `<h1>`–`<h6>` | Headings from highest to lowest importance. |

---

## ✍️ Text Formatting Tags

| Tag                 | Description                      |
| ------------------- | -------------------------------- |
| `<a>`               | Anchor (hyperlink).              |
| `<abbr>`            | Abbreviation.                    |
| `<acronym>` ⚠️      | Deprecated acronym tag.          |
| `<b>`               | Bold (non-semantic).             |
| `<strong>`          | Bold (semantic emphasis).        |
| `<i>`               | Italic (non-semantic).           |
| `<em>`              | Emphasized text.                 |
| `<mark>`            | Highlighted text.                |
| `<code>`            | Inline code block.               |
| `<pre>`             | Preformatted block of code.      |
| `<span>`            | Generic inline container.        |
| `<small>`           | Smaller text.                    |
| `<sub>`             | Subscript text.                  |
| `<sup>`             | Superscript text.                |
| `<u>`               | Underlined text.                 |
| `<strike>` or `<s>` | Strikethrough.                   |
| `<tt>` ⚠️           | Teletype (deprecated).           |
| `<var>`             | Variable in programming context. |
| `<kbd>`             | Keyboard input.                  |
| `<samp>`            | Sample program output.           |
| `<q>`               | Short inline quotation.          |
| `<blockquote>`      | Long quoted block.               |
| `<bdi>`             | Bi-directional override.         |
| `<bdo>`             | Overrides text direction.        |
| `<cite>`            | Cited source.                    |
| `<dfn>`             | Defining instance of a term.     |
| `<wbr>`             | Word break opportunity.          |

---

## 📝 List Tags

| Tag    | Description             |
| ------ | ----------------------- |
| `<ul>` | Unordered list.         |
| `<ol>` | Ordered list.           |
| `<li>` | List item.              |
| `<dl>` | Definition list.        |
| `<dt>` | Definition term.        |
| `<dd>` | Definition description. |

---

## 🧾 Forms and Input Tags

| Tag          | Description                            |
| ------------ | -------------------------------------- |
| `<form>`     | Form container.                        |
| `<input>`    | Input field.                           |
| `<textarea>` | Multi-line text input.                 |
| `<select>`   | Drop-down list.                        |
| `<option>`   | List option.                           |
| `<optgroup>` | Grouping of options.                   |
| `<label>`    | Describes a form input.                |
| `<button>`   | Button element.                        |
| `<fieldset>` | Groups related form controls.          |
| `<legend>`   | Caption for `<fieldset>`.              |
| `<datalist>` | Autocomplete suggestions.              |
| `<output>`   | Displays result of a calculation.      |
| `<meter>`    | Scalar measurement (e.g., disk space). |
| `<progress>` | Progress bar indicator.                |

---

## 📊 Table Tags

| Tag          | Description             |
| ------------ | ----------------------- |
| `<table>`    | Table container.        |
| `<tr>`       | Table row.              |
| `<td>`       | Table cell (data).      |
| `<th>`       | Table header cell.      |
| `<thead>`    | Table head section.     |
| `<tbody>`    | Table body section.     |
| `<tfoot>`    | Table footer section.   |
| `<caption>`  | Table title or caption. |
| `<col>`      | Column property.        |
| `<colgroup>` | Group of columns.       |

---

## 🎥 Media & Embedding Tags

| Tag         | Description                               |
| ----------- | ----------------------------------------- |
| `<img>`     | Embed image.                              |
| `<audio>`   | Embed audio.                              |
| `<video>`   | Embed video.                              |
| `<source>`  | Media source for `<audio>`/`<video>`.     |
| `<track>`   | Subtitles for media.                      |
| `<canvas>`  | Drawing via JS.                           |
| `<svg>`     | Scalable vector graphics.                 |
| `<iframe>`  | Inline frame.                             |
| `<embed>`   | Embed external content (like PDF, Flash). |
| `<object>`  | Embed external resources.                 |
| `<param>`   | Parameters for plugins.                   |
| `<picture>` | Responsive images.                        |
| `<map>`     | Image map.                                |
| `<area>`    | Clickable area on image map.              |

---

## ⚠️ Obsolete or Deprecated Tags

| Tag          | Description                         |
| ------------ | ----------------------------------- |
| `<applet>`   | Java applet (deprecated).           |
| `<acronym>`  | Deprecated alternative to `<abbr>`. |
| `<basefont>` | Sets base font (deprecated).        |
| `<big>`      | Enlarged text (deprecated).         |
| `<center>`   | Center-aligned text (deprecated).   |
| `<dir>`      | Directory list (deprecated).        |
| `<font>`     | Deprecated font styling.            |
| `<frame>`    | Frame inside frameset (deprecated). |
| `<frameset>` | Container for frames (deprecated).  |
| `<noframes>` | Fallback for unsupported frames.    |
| `<tt>`       | Teletype text (deprecated).         |

---

