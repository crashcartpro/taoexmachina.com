## Prerequisites

**Terraform** - Download from https://www.terraform.io/downloads
**DigitalOcean API token** - Generate from https://cloud.digitalocean.com/account/api/tokens

## Usage

### 1. Set DigitalOcean API token

```
export TF_VAR_do_token="your_digitalocean_api_token_here"
```

### 2. Initialize Terraform

```
terraform init
```

### 3. Apply the configuration

```
terraform apply
```