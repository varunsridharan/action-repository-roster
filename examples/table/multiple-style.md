# bold,italic,img-small
Username will be bold & italic & User's avatar will be small

### ↳ Stargazers

<!-- REPOSITORY_STARS:START -->

<!-- REPOSITORY_STARS:END -->

### ↳ Forkers

<!-- REPOSITORY_FORKS:START -->
<table><tbody><tr><td align="center"><a href="https://github.com/EnterpriseBranding" rel="nofollow"><img src="https://avatars3.githubusercontent.com/u/6123260?v=4" alt="@EnterpriseBranding" style="max-width:100%;" width="50px;"><br/><b><i>@EnterpriseBranding</i></b></a> </td></tr></tbody></table><p align="center"><i><b>1</b> have forked this repository</i></p>
<!-- REPOSITORY_FORKS:END -->

---

```yml
- name: "🐔  Update Repository Roster"
  uses: "varunsridharan/action-repository-roster@main"
  with:
    STARS_OUTPUT_STYLE: "bold,italic,img-small"
    FORK_OUTPUT_STYLE: "bold,italic,img-small"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```