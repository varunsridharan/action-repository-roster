# no-name
User's name will not be displayed

### ↳ Stargazers

<!-- REPOSITORY_STARS:START -->
<table><tbody><tr><td align="center"><a href="https://github.com/EnterpriseBranding" rel="nofollow"><img src="https://avatars3.githubusercontent.com/u/6123260?v=4" alt="@EnterpriseBranding" style="max-width:100%;" width="75px;"></a> </td></tr></tbody></table><p align="center"><i><b>1</b> have starred this repository</i></p>
<!-- REPOSITORY_STARS:END -->

### ↳ Forkers

<!-- REPOSITORY_FORKS:START -->
<table><tbody><tr><td align="center"><a href="https://github.com/EnterpriseBranding" rel="nofollow"><img src="https://avatars3.githubusercontent.com/u/6123260?v=4" alt="@EnterpriseBranding" style="max-width:100%;" width="75px;"></a> </td></tr></tbody></table><p align="center"><i><b>1</b> have forked this repository</i></p>
<!-- REPOSITORY_FORKS:END -->

---

```yml
- name: "🐔  Update Repository Roster"
  uses: "varunsridharan/action-repository-roster@main"
  with:
    STARS_OUTPUT_STYLE: "no-name"
    FORK_OUTPUT_STYLE: "no-name"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```