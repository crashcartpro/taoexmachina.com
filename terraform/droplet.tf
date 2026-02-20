data "digitalocean_ssh_key" "do_ops" {
  name = "id_do_ops"
}

resource "digitalocean_droplet" "web-01" {
  name = "web-debian-nyc3-01"
  region = "nyc3"
  image = "debian-13-x64"
  size = "s-1vcpu-2gb"
  ssh_keys = [data.digitalocean_ssh_key.do_ops.id]
}

output "droplet_ip" {
  value       = digitalocean_droplet.web-01.ipv4_address
  description = "Public IP address of the droplet"
}

output "droplet_id" {
  value       = digitalocean_droplet.web-01.id
  description = "ID of the droplet"
}