<p align="center"> 
<img style="max-width:100%;" src="https://cdn.svarun.dev/gh/varunsridharan/action-repository-roster/banner.jpg"/>
~ Shout-out supporters in your GitHub README file. ~ 
</p>

## 🚀  Usage
1. [Setup Action Workflow File](#-github-action-workflow-file)
2. Update Your `README.md` with below code

***Repository Stargazers***
```markdown
    ## ↳ Stargazers
    <!-- REPOSITORY_STARS:START --> <!-- REPOSITORY_STARS:END -->
```

***Repository Forks***
```markdown
    ## ↳ Forkers
    <!-- REPOSITORY_FORKS:START --><!-- REPOSITORY_FORKS:END -->
```
> :information_source:  Currently there are ways to auto trigger the workflow when a users **stars** / **forks** the repository.
>
> :information_source:  Using this action with the workflow trigger [fork](https://docs.github.com/en/free-pro-team@latest/actions/reference/events-that-trigger-workflows#fork) & [watch](https://docs.github.com/en/free-pro-team@latest/actions/reference/events-that-trigger-workflows#watch) is the best optmized way.
>
> if you want to remove users that have un-stared / deleted the fork then you might have to use [cron](https://docs.github.com/en/free-pro-team@latest/actions/reference/events-that-trigger-workflows#schedule) to handle it

---

## ⚙️ Configuration
<table>
    <tr>
        <th>Option</th>
        <th>Description</th>
        <th>Default</th>
    </tr>
    <tr> <th colspan="3">General Config</th> </tr>
    <tr>
        <td><code>IMAGE_SAVE_PATH</code></td>
        <td>
            Custom location on where to save generated <strong>SVG</strong> image file. <br/>
            <i>Image Files Are Generated When Output Type Set To <code>image</code></i>
        </td>
        <td><code>.github/roster/</code></td>
    </tr>
    <tr> <th colspan="3">Forks Config</th> </tr>
    <tr>
        <td><code>FORK</code></td>
        <td>
            Set to <strong>true</strong> to generate latest forked users information. or provide a file location to update the information <br/>
            If its set to <strong>FALSE</strong> the forked users information will not be generated
        </td>
        <td><code>README.md</code></td>
    </tr>
    <tr>
        <td><code>FORK_OUTPUT_TYPE</code></td>
        <td>this can be set to either <strong>table</strong>, <strong>list</strong> OR <strong>image</strong></td>
        <td><code>markdown</code></td>
    </tr>
    <tr>
        <td><code>FORK_OUTPUT_STYLE</code></td>
        <td>Please Refer <a href="#paintbrush-styling-options">:paintbrush: Styling Options</a> Below</td>
        <td><code>table</code></td>
    </tr>
    <tr>
        <td><code>FORK_COUNTS</code></td>
        <td>No of latest forked users to generate</td>
        <td><code>7</code></td>
    </tr>
    <tr>
        <td><code>FORK_DESCRIPTION</code></td>
        <td>
            set to <strong>true</strong> to show default description after Forks users information. <br/>
            or you can also provide your custom text to show after the Forks users information.
            if its set to <strong>FALSE</strong> description will not be generated        
        </td>
        <td><code>true</code></td>
    </tr>
    <tr> <th colspan="3">Stars Config</th> </tr>
    <tr>
        <td><code>STARS</code></td>
        <td>
            Set to <strong>true</strong> to generate latest Stargazers users information. or provide a file location to update the information <br/>
            If its set to <strong>FALSE</strong> the Stargazers users information will not be generated
        </td>
        <td><code>README.md</code></td>
    </tr>
    <tr>
        <td><code>STARS_OUTPUT_TYPE</code></td>
        <td>this can be set to either <strong>table</strong>, <strong>list</strong> OR <strong>image</strong></td>
        <td><code>markdown</code></td>
    </tr>
    <tr>
        <td><code>STARS_OUTPUT_STYLE</code></td>
        <td>Please Refer <a href="#paintbrush-styling-options">:paintbrush: Styling Options</a> Below</td>
        <td><code>table</code></td>
    </tr>
    <tr>
        <td><code>STARS_COUNTS</code></td>
        <td>No of latest Stargazers users to generate</td>
        <td><code>7</code></td>
    </tr>
    <tr>
        <td><code>STARS_DESCRIPTION</code></td>
        <td>
            set to <strong>true</strong> to show default description after Stargazers users information. <br/>
            or you can also provide your custom text to show after the Stargazers users information.
            if its set to <strong>FALSE</strong> description will not be generated        
        </td>
        <td><code>true</code></td>
    </tr>
</table>

### :paintbrush: Styling Options
<table>
    <tr>
        <th>Option</th>
        <th>Description</th>
        <th colspan="3">Output Types</th>
    </tr>
    <tr>
        <td colspan="2"></td>
        <th>Image</th>
        <th>Table</th>
        <th>List</th>
    </tr>
    <tr>
        <td><code>no-image</code></td>
        <td>User's avatar will not be rendered</td>
        <td align="center">✔</td>
        <td align="center">✔</td>
        <td align="center">❌</td>
    </tr>
    <tr>
        <td><code>img-smooth</code></td>
        <td>User's avatar will slightly rounded</td>
        <td align="center">✔</td>
        <td align="center">❌</td>
        <td align="center">❌</td>
    </tr>
    <tr>
        <td><code>img-rounded</code></td>
        <td>User's avatar will rounded</td>
        <td align="center">✔</td>
        <td align="center">❌</td>
        <td align="center">❌</td>
    </tr>
    <tr>
        <td><code>img-small</code></td>
        <td>User's avatar will be set to small size</td>
        <td align="center">✔</td>
        <td align="center">✔</td>
        <td align="center">❌</td>
    </tr>
    <tr>
        <td><code>img-large</code></td>
        <td>User's avatar will be set to large size</td>
        <td align="center">✔</td>
        <td align="center">✔</td>
        <td align="center">❌</td>
    </tr>
    <tr>
        <td><code>no-name</code></td>
        <td>User's name will not be rendered</td>
        <td align="center">✔</td>
        <td align="center">✔</td>
        <td align="center">❌</td>
    </tr>
    <tr>
        <td><code>no-link</code></td>
        <td>Link to users github profile will not be added</td>
        <td align="center">❌</td>
        <td align="center">✔</td>
        <td align="center">✔</td>
    </tr>
    <tr>
        <td><code>list-ordered</code></td>
        <td>HTML list will be ordered</td>
        <td align="center">❌</td>
        <td align="center">❌</td>
        <td align="center">✔</td>
    </tr>
    <tr>
        <td><code>bold</code></td>
        <td>username text will be rendered in bold text</td>
        <td align="center">✔</td>
        <td align="center">✔</td>
        <td align="center">✔</td>
    </tr>
    <tr>
        <td><code>italic</code></td>
        <td>username text will be rendered in italic text</td>
        <td align="center">✔</td>
        <td align="center">✔</td>
        <td align="center">✔</td>
    </tr>
    <tr>
        <td><code>small</code></td>
        <td>username text will be rendered in small fontsize text</td>
        <td align="center">✔</td>
        <td align="center">✔</td>
        <td align="center">✔</td>
    </tr>
</table>

> You can provide multiple styles in `*_OUTPUT_STYLE` by entering `,` separated | Example : `img-small,bold,italic`

#### Example Code
 ```yaml
# Below Will Render Stargazers Data In HTML Table With small user avatar
STARS_OUTPUT_TYPE: 'table' # Possible Options [ image , table , list ]
STARS_OUTPUT_STYLE: 'img-small'

# Below Will Render Fork's Data In SVG Image with small user avatar & user's name hidden
FORK_OUTPUT_TYPE: 'image' # Possible Options [ image , table , list ]
FORK_OUTPUT_STYLE: 'img-small,no-name'
 ```

## 🚀 Github Action Workflow File

<!-- START [code:yml|raw] .github/workflows/repo-roster.yml -->
```yml
name: "🙏 Repository Roster"

on:
  workflow_dispatch:
  watch:
    types:
      - started
  fork:

jobs:
  update_latest_roster:
    if: github.repository == 'varunsridharan/action-repository-roster'
    name: "🐔  Update Latest Roster"
    runs-on: ubuntu-latest
    steps:
      - name: "📥  Fetching Repository Contents"
        uses: actions/checkout@main

      - name: "🐔  Markdown - Repository Roster"
        uses: "varunsridharan/action-repository-roster@main"
        env:
          GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}

```
<!-- END [code:yml|raw] .github/workflows/repo-roster.yml -->


## 🎉 Live Examples (for this repo)

### ↳ Stargazers
<!-- REPOSITORY_STARS:START -->
<table><tbody><tr><td align="center"><a href="https://github.com/varunsridharan" rel="nofollow"><img src="https://avatars1.githubusercontent.com/u/1884287?v=4" alt="@varunsridharan" style="max-width:100%;" width="75px;"><br/>@varunsridharan</a> </td><td align="center"><a href="https://github.com/EnterpriseBranding" rel="nofollow"><img src="https://avatars3.githubusercontent.com/u/6123260?v=4" alt="@EnterpriseBranding" style="max-width:100%;" width="75px;"><br/>@EnterpriseBranding</a> </td></tr></tbody></table><p align="center"><i><b>2</b> have starred this repository</i></p>
<!-- REPOSITORY_STARS:END -->

### ↳ Forkers
<!-- REPOSITORY_FORKS:START -->
<table><tbody><tr><td align="center"><a href="https://github.com/EnterpriseBranding" rel="nofollow"><img src="https://avatars3.githubusercontent.com/u/6123260?v=4" alt="@EnterpriseBranding" style="max-width:100%;" width="75px;"><br/>@EnterpriseBranding</a> </td></tr></tbody></table><p align="center"><i><b>1</b> have forked this repository</i></p>
<!-- REPOSITORY_FORKS:END -->

<p align="center">
    For Styling Demo Please Check <a href="https://github.com/varunsridharan/action-repository-roster/tree/main/examples">Examples Directory</a>
</p>

---

<!-- START common-footer.mustache -->
## 📝 Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

[Checkout CHANGELOG.md](https://github.com/varunsridharan/action-repository-roster/blob/main/CHANGELOG.md)


## 🤝 Contributing
If you would like to help, please take a look at the list of [issues](https://github.com/varunsridharan/action-repository-roster/issues/).


## 📜  License & Conduct
- [**MIT License**](https://github.com/varunsridharan/action-repository-roster/blob/main/LICENSE) © [Varun Sridharan](website)
- [Code of Conduct](https://github.com/varunsridharan/.github/blob/master/CODE_OF_CONDUCT.md)


## 📣 Feedback
- ⭐ This repository if this project helped you! :wink:
- Create An [🔧 Issue](https://github.com/varunsridharan/action-repository-roster/issues/) if you need help / found a bug


## 💰 Sponsor
[I][twitter] fell in love with open-source in 2013 and there has been no looking back since! You can read more about me [here][website].
If you, or your company, use any of my projects or like what I’m doing, kindly consider backing me. I'm in this for the long run.

- ☕ How about we get to know each other over coffee? Buy me a cup for just [**$9.99**][buymeacoffee]
- ☕️☕️ How about buying me just 2 cups of coffee each month? You can do that for as little as [**$9.99**][buymeacoffee]
- 🔰         We love bettering open-source projects. Support 1-hour of open-source maintenance for [**$24.99 one-time?**][paypal]
- 🚀         Love open-source tools? Me too! How about supporting one hour of open-source development for just [**$49.99 one-time ?**][paypal]

<!-- Personl Links -->
[paypal]: https://sva.onl/paypal
[buymeacoffee]: https://sva.onl/buymeacoffee
[twitter]: https://sva.onl/twitter/
[website]: https://sva.onl/website/


## Connect & Say 👋
- **Follow** me on [👨‍💻 Github][github] and stay updated on free and open-source software
- **Follow** me on [🐦 Twitter][twitter] to get updates on my latest open source projects
- **Message** me on [📠 Telegram][telegram]
- **Follow** my pet on [Instagram][sofythelabrador] for some _dog-tastic_ updates!

<!-- Personl Links -->
[sofythelabrador]: https://www.instagram.com/sofythelabrador/
[github]: https://sva.onl/github/
[twitter]: https://sva.onl/twitter/
[telegram]: https://sva.onl/telegram/


---

<p align="center">
<i>Built With ♥ By <a href="https://sva.onl/twitter"  target="_blank" rel="noopener noreferrer">Varun Sridharan</a> <a href="https://en.wikipedia.org/wiki/India">
   <img src="https://cdn.svarun.dev/flag-india.jpg" width="20px"/></a> </i> <br/><br/>
   <img src="https://cdn.svarun.dev/codeispoetry.png"/>
</p>

---


<!-- END common-footer.mustache -->