# bold,italic,list-ordered
Username will be bold & italic & Users list will be generated using HTML `ol` _Ordered list_

### ↳ Stargazers

<!-- REPOSITORY_STARS:START -->

<!-- REPOSITORY_STARS:END -->

### ↳ Forkers

<!-- REPOSITORY_FORKS:START -->

<!-- REPOSITORY_FORKS:END -->

---

```yml
- name: "🐔  Update Repository Roster"
  uses: "varunsridharan/action-repository-roster@main"
  with:
    STARS_OUTPUT_TYPE: "list"
    FORK_OUTPUT_TYPE: "list"
    STARS_OUTPUT_STYLE: "bold,italic,list-ordered"
    FORK_OUTPUT_STYLE: "bold,italic,list-ordered"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```