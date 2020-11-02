# no-link
Github user's profile link will not be added

### ↳ Stargazers

<!-- REPOSITORY_STARS:START -->
<ul><li>@EnterpriseBranding <br/> </li></ul><p align="center"><i><b>1</b> have starred this repository</i></p>
<!-- REPOSITORY_STARS:END -->

### ↳ Forkers

<!-- REPOSITORY_FORKS:START -->
<ul><li>@EnterpriseBranding <br/> </li></ul><p align="center"><i><b>1</b> have forked this repository</i></p>
<!-- REPOSITORY_FORKS:END -->

---

```yml
- name: "🐔  Update Repository Roster"
  uses: "varunsridharan/action-repository-roster@main"
  with:
    STARS_OUTPUT_TYPE: "list"
    FORK_OUTPUT_TYPE: "list"
    STARS_OUTPUT_STYLE: "no-link"
    FORK_OUTPUT_STYLE: "no-link"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```